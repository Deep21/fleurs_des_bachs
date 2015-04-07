package dw.mcommerce.com.fdpapp.fragments.customer;

import android.content.SharedPreferences;
import android.content.SharedPreferences.Editor;
import android.os.Bundle;
import android.preference.PreferenceManager;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import butterknife.ButterKnife;
import butterknife.InjectView;
import butterknife.OnClick;

import com.ecommerce.fragments.BaseFragment;
import com.ecommerce.fragments.BaseListFragment;
import com.ecommerce.model.Token;
import com.ecommerce.robospice.request.OauthGetAccesTokenRequest;
import com.example.test.R;
import com.google.gson.Gson;
import com.google.gson.GsonBuilder;
import com.octo.android.robospice.persistence.exception.SpiceException;
import com.octo.android.robospice.request.listener.RequestListener;

public class AddressFragment extends BaseListFragment {

    public static final String TAG = "AddressFragment";
    public static final int TAG_ID = 1;

    public static AddressFragment getInstance() {
        AddressFragment connexionFragment = new AddressFragment();
        return connexionFragment;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.list_fragment, container, false);
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
        if (getListAdapter() == null) {

        }
    }

    @Override
    public void onDestroyView() {
        super.onDestroyView();
        ButterKnife.reset(this);
    }

    private void perform_request(Token token) {
        OauthGetAccesTokenRequest accesTokenRequest = new OauthGetAccesTokenRequest(token);
        getSpiceManager().execute(accesTokenRequest, new GetAccesTokenRequest());
    }

    private void storeInSharedPref(Token token) {
        SharedPreferences prefs = PreferenceManager.getDefaultSharedPreferences(getActivity());
        Editor edit = prefs.edit();
        edit.putString(Token.OAUTH_ACCES_TOKEN, token.getAccessToken());
        edit.putString(Token.OAUTH_REFRESH_TOKEN, token.getRefreshToken());
        edit.commit();
    }

    class GetAccesTokenRequest implements RequestListener<Token> {

        @Override
        public void onRequestFailure(SpiceException e) {

        }

        @Override
        public void onRequestSuccess(Token token) {
            if (token != null) {
                storeInSharedPref(token);
            }

        }
    }

}
