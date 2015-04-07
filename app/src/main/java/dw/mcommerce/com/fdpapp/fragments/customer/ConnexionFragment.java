package dw.mcommerce.com.fdpapp.fragments.customer;

import android.app.Activity;
import android.content.Context;
import android.content.SharedPreferences;
import android.content.SharedPreferences.Editor;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import butterknife.ButterKnife;
import butterknife.InjectView;
import butterknife.OnClick;

import com.devspark.appmsg.AppMsg;
import com.ecommerce.android.service.BaseRequestLisner;
import com.ecommerce.fragments.BaseFragment;
import com.ecommerce.fragments.listner.FragmentListner;
import com.ecommerce.fragments.listner.OauthListner;
import com.ecommerce.model.AuthTokenException;
import com.ecommerce.model.Customer;
import com.ecommerce.model.Token;
import com.ecommerce.robospice.request.CustomerGetContextRequest;
import com.ecommerce.robospice.request.OauthGetAccesTokenRequest;
import com.example.test.R;
import com.google.gson.Gson;
import com.google.gson.GsonBuilder;

public class ConnexionFragment extends BaseFragment {
    public static final String TAG = "ConnexionFragment";
    @InjectView(R.id.login)
    TextView login;
    @InjectView(R.id.pwd)
    TextView pwd;
    FragmentListner fragmentSwitcherListner;
    OauthListner oauthListner;

    public static ConnexionFragment getInstance() {
        ConnexionFragment connexionFragment = new ConnexionFragment();
        return connexionFragment;
    }

    public static ConnexionFragment newInstance(int i) {
        ConnexionFragment connexionFragment = new ConnexionFragment();
        return connexionFragment;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.connexion_fragment, container, false);
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

        }
    }

    @Override
    public void onViewCreated(View view, Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);
    }

    @OnClick(R.id.btn_login)
    public void loginListner() {
        String logins = login.getText().toString();
        String pwdd = pwd.getText().toString();
        Token token = new Token();
        token.setClientId("testclient");
        token.setClientSecret("clientsecret");
        token.setGrantType("password");
        token.setPassword("azerty21");
        token.setUsername("samfisher8456@hotmail.com");
        perform_request(token);
    }

    @OnClick(R.id.btn_create_account)
    public void createAccountListner() {
        fragmentSwitcherListner.replaceFragment(CustomerCreateFragment.getInstance(), null);
    }

    private String createGson(Token token) {
        Gson gson = new GsonBuilder().setPrettyPrinting().create();
        return gson.toJson(token);
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

    }

    @Override
    public void onDestroyView() {
        super.onDestroyView();
        ButterKnife.reset(this);
    }

    private void perform_request(Token token) {
        OauthGetAccesTokenRequest accesTokenRequest = new OauthGetAccesTokenRequest(token);
        getSpiceManager().execute(accesTokenRequest, new BaseRequestLisner<Token>() {

            @Override
            public void onInvalidToken(AuthTokenException authTokenException) {
                if (authTokenException.getErrorDescription().equals("Invalid username and password combination"))
                    AppMsg.makeText(getActivity(), "Votre mot de passe ou l'adresse mail est erron�", AppMsg.STYLE_ALERT).show();

            }

            @Override
            public void onRequestSuccess(Token token) {
                //super.onRequestSuccess(null);
                oauthListner.storeTokenAccessPref(token);

                SharedPreferences preferences = getActivity().getSharedPreferences("customer", Context.MODE_PRIVATE);

                CustomerGetContextRequest contextRequest = new CustomerGetContextRequest(token.getAccessToken());
                //"5c871bfa7223211f695c161d5ac166a21068bec5"
                //t.getAccessToken()
                getSpiceManager().execute(contextRequest, new BaseRequestLisner<Customer>() {

                    @Override
                    public void onRequestSuccess(Customer c) {
                        //super.onRequestSuccess(null);
                        SharedPreferences sharedPreferences = getActivity().getSharedPreferences("customer", Context.MODE_PRIVATE);
                        Editor editor = sharedPreferences.edit();
                        editor.putInt("id_cart", c.getCart().getId_cart());
                        editor.commit();
                    }

                    @Override
                    public void onInvalidToken(AuthTokenException spiceException) {


                    }

                    @Override
                    public void onExpiredToken(AuthTokenException spiceException) {
                        super.onExpiredToken(spiceException);
                        //System.out.println(spiceException);

                    }

                });


				/*if(t!=null){
                    oauthListner.storeTokenAccessPref(t);
					fragmentSwitcherListner.replaceFragment(CustomerHomeFragment.getInstance(), null);

				}*/
            }


        });
    }

}
