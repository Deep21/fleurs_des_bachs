package dw.mcommerce.com.fdpapp.fragments.customer;

import android.app.Activity;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import butterknife.ButterKnife;
import butterknife.InjectView;

import com.ecommerce.fragments.BaseFragment;
import com.ecommerce.fragments.listner.OauthListner;
import com.ecommerce.model.OrderHistory;
import com.ecommerce.robospice.request.OrderGetRequest;
import com.example.test.R;
import com.octo.android.robospice.persistence.exception.SpiceException;
import com.octo.android.robospice.request.listener.RequestListener;

public class OrderDetailScrollFragment extends BaseFragment {
    public static final String TAG = "OrderScrollFragment";
    public OauthListner listner;
    @InjectView(R.id.p2)
    OrderDetailRelativeView detailRelativeView;
    @InjectView(R.id.num_commande)
    TextView date_de_commande;
    @InjectView(R.id.date_de_commande)
    TextView num_commande;
    @InjectView(R.id.commande_price)
    TextView commande_price;
    @InjectView(R.id.total_de_la_commande)
    TextView total_de_la_commande;
    @InjectView(R.id.payment)
    TextView payment;
    @InjectView(R.id.tva)
    TextView tva;
    @InjectView(R.id.total_ht)
    TextView total_ht;
    @InjectView(R.id.livraison)
    TextView livraison;

    public static OrderDetailScrollFragment newInstance(int id_order) {
        OrderDetailScrollFragment orderScrollFragment = new OrderDetailScrollFragment();
        Bundle bundle = new Bundle();
        bundle.putInt("id_order", id_order);
        orderScrollFragment.setArguments(bundle);
        return orderScrollFragment;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.custom_order_view, container, false);
        ButterKnife.inject(this, view);
        return view;
    }

    @Override
    public void onAttach(Activity activity) {
        super.onAttach(activity);
        try {
            listner = (OauthListner) activity;
        } catch (ClassCastException e) {

        }
    }

    @Override
    public void onViewCreated(View view, Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Log.e(TAG, "onCreate");
        Bundle bundle = getArguments();
        if (bundle != null) {
            int id_order = bundle.getInt("id_order");
            OrderGetRequest e = new OrderGetRequest(id_order, listner.getAccessTokenFromPref());
            getSpiceManager().execute(e, new OrderRequest());
        }

    }

    @Override
    public void onDestroyView() {
        super.onDestroyView();

    }

    @Override
    public void onDestroy() {
        super.onDestroy();
        ButterKnife.reset(this);
        Log.e(TAG, "onDestroy");
    }

    class OrderRequest implements RequestListener<OrderHistory> {

        @Override
        public void onRequestFailure(SpiceException e) {
            System.out.println(e);

        }

        @Override
        public void onRequestSuccess(OrderHistory orderHistory) {
            payment.setText(orderHistory.getPayment());
            date_de_commande.setText(orderHistory.getOrderDate());
            num_commande.setText(orderHistory.getReference());

            detailRelativeView.initUI(orderHistory);
            commande_price.setText(Double.toString(orderHistory.getTotalPaid()));
            tva.setText(Double.toString(orderHistory.getTva()));
            total_de_la_commande.setText(Double.toString(orderHistory.getTotalPaid()));
            total_ht.setText(Double.toString(orderHistory.getTotalPaidTaxExcl()));
            livraison.setText(Double.toString(orderHistory.getTotalShipping()));
        }


    }


}
