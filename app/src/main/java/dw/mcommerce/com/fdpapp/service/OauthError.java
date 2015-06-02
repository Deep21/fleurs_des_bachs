package dw.mcommerce.com.fdpapp.service;

import com.ecommerce.model.AuthTokenException;

public interface OauthError{
	//ne doit pas être modifié
	public static final String EXPIRED_MSG = "The access token provided has expired";
	
	public void onExpiredToken(AuthTokenException spiceException);
	public void onInvalidToken(AuthTokenException spiceException);
}