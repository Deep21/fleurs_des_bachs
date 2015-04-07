package dw.mcommerce.com.fdpapp.fragments.customer;

import android.app.Activity;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.widget.RelativeLayout;
import android.widget.TextView;

import butterknife.ButterKnife;
import butterknife.InjectView;

import com.ecommerce.fragments.BaseFragment;
import com.ecommerce.fragments.listner.FragmentListner;
import com.ecommerce.model.Customer;
import com.ecommerce.robospice.request.CustomerCreateRequest;
import com.example.test.R;
import com.octo.android.robospice.persistence.exception.SpiceException;
import com.octo.android.robospice.request.listener.RequestListener;

public class CustomerCreateFragment extends BaseFragment {

    public static final String TAG = "CustomerCreateFragment";
    @InjectView(R.id.nom)
    TextView nom;
    @InjectView(R.id.prenom)
    TextView prenom;
    @InjectView(R.id.email)
    TextView email;
    @InjectView(R.id.pwd)
    TextView pwd;
    @InjectView(R.id.pwd_confirm)
    TextView pwd_confirm;
    View view;
    FragmentListner fragmentListner;

    public static CustomerCreateFragment getInstance() {
        CustomerCreateFragment connexionFragment = new CustomerCreateFragment();
        return connexionFragment;
    }

    @Override
    public void onAttach(Activity activity) {
        super.onAttach(activity);
        fragmentListner = (FragmentListner) activity;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        view = inflater.inflate(R.layout.create_account_fragment, container, false);
        ButterKnife.inject(this, view);
        return view;
    }

    @Override
    public void onViewCreated(View view, Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setHasOptionsMenu(true);
    }

    private Customer getCustomer() {
        Customer customer = new Customer();
        customer.setFirstname(nom.getText().toString());
        customer.setFirstname(prenom.getText().toString());
        customer.setFirstname(email.getText().toString());
        customer.setFirstname(pwd.getText().toString());
        customer.setFirstname(pwd_confirm.getText().toString());
        return customer;
    }

    @Override
    public void onCreateOptionsMenu(Menu menu, MenuInflater inflater) {
        MenuItem item = menu.add(Menu.NONE, R.id.add, 10, R.string.add);
        item.setShowAsAction(MenuItem.SHOW_AS_ACTION_IF_ROOM);
        super.onCreateOptionsMenu(menu, inflater);

    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        int itemId = item.getItemId();
        switch (itemId) {
            case R.id.add:
                perform_request();
        }
        return true;
    }

    @Override
    public void onDestroyView() {
        super.onDestroyView();
        ButterKnife.reset(this);
    }

    private void perform_request() {
        CustomerCreateRequest customerCreateRequest = new CustomerCreateRequest(getCustomer());
        getSpiceManager().execute(customerCreateRequest, new CreateCustomerListner());
    }

    public class CreateCustomerListner implements RequestListener<Customer> {

        @Override
        public void onRequestFailure(SpiceException e) {
            System.out.println(e);

        }

        @Override
        public void onRequestSuccess(Customer customer) {
            if (customer.getCode() == 201) {
                System.out.println("ok");
                fragmentListner.removeFragment(CustomerCreateFragment.this);
            }

        }

    }
}
