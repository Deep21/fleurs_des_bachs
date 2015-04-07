package dw.mcommerce.com.fdpapp.fragments.customer;

import android.app.Activity;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ListView;
import android.widget.RelativeLayout;

import butterknife.ButterKnife;
import butterknife.InjectView;
import butterknife.OnClick;

import com.ecommerce.adapter.CustomListAdapter;
import com.ecommerce.android.service.BaseRequestLisner;
import com.ecommerce.fragments.BaseListFragment;
import com.ecommerce.fragments.listner.FragmentListner;
import com.ecommerce.fragments.listner.OauthListner;
import com.ecommerce.model.AuthTokenException;
import com.ecommerce.model.OrderHistory;
import com.ecommerce.robospice.request.OrderGetByCustomerRequest;
import com.example.test.R;
import com.octo.android.robospice.persistence.exception.SpiceException;
import com.octo.android.robospice.request.listener.RequestListener;

import de.greenrobot.event.EventBus;

public class OrderListFragment extends BaseListFragment {
    public static final String TAG = "OrderListFragment";
    public static final int TAG_ID = 0;
    FragmentListner fragmentSwitcherListner;
    OauthListner oauthListner;
    @InjectView(R.id.empty)
    RelativeLayout emptyRelativeLayout;

    public static OrderListFragment newInstance() {
        OrderListFragment listFragment = new OrderListFragment();
        return listFragment;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.list_order_fragment, container, false);
        ButterKnife.inject(this, view);
        return view;
    }

    @Override
    public void onAttach(Activity activity) {
        super.onAttach(activity);
        try {
            fragmentSwitcherListner = (FragmentListner) activity;
            oauthListner = (OauthListner) activity;
        } catch (ClassCastException castException) {
            System.out.println(castException.getMessage());
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
        perform_request();
    }

    private void perform_request() {
        OrderGetByCustomerRequest getByCustomerRequest = new OrderGetByCustomerRequest(2, "Bearer 83b49bb5c553cf8441d69661a5fb1ab992f35282");
        getSpiceManager().execute(getByCustomerRequest, new BaseRequestLisner<OrderHistory.OrderList>() {

            @Override
            public void onInvalidToken(AuthTokenException spiceException) {

            }

            @Override
            public void onExpiredToken(AuthTokenException authTokenException) {
                super.onExpiredToken(authTokenException);

            }
        });
    }

    @Override
    public void onDestroyView() {
        super.onDestroyView();
    }

    @Override
    public void onListItemClick(ListView lv, View v, int position, long id) {
        super.onListItemClick(lv, v, position, id);
        fragmentSwitcherListner.replaceFragment(OrderDetailScrollFragment.newInstance(getIdOrder(position, lv)), null);

    }

    private int getIdOrder(int position, ListView lv) {
        CustomListAdapter adapter = (CustomListAdapter) lv.getAdapter();
        OrderHistory orderHistory = (OrderHistory) adapter.getCustomItems().get(position);
        return orderHistory.getIdOrder();

    }

    @Override
    public void onDestroy() {
        super.onDestroy();
        ButterKnife.reset(this);
        Log.e(TAG, "onDestroy");
    }

    @OnClick(R.id.add_address)
    public void deleteProduct() {
        fragmentSwitcherListner.replaceFragment(AddressAddFragment.getInstance(), null);
    }

    class OrderListRequest extends BaseRequestLisner<OrderHistory.OrderList> {

        @Override
        public void onRequestSuccess(OrderHistory.OrderList orderHistory) {
            if (orderHistory != null) {
                CustomListAdapter customListAdapter = new CustomListAdapter(getActivity(), orderHistory);
                setListAdapter(customListAdapter);
            } else {
                getListView().setEmptyView(emptyRelativeLayout);

            }

        }

        @Override
        public void onInvalidToken(AuthTokenException spiceException) {

        }

        @Override
        public void onExpiredToken(AuthTokenException authTokenException) {
            super.onExpiredToken(authTokenException);
        }
    }
}
