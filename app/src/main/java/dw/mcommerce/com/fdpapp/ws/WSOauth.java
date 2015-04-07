package dw.mcommerce.com.fdpapp.ws;

import retrofit.http.Body;
import retrofit.http.POST;
import retrofit.http.Query;

import com.ecommerce.model.Token;

public interface WSOauth {

	@POST("/auth/access-token")
	public Token getAccesToken(@Body Token token, @Query("refresh") int refresh);
	
	@POST("/auth/refresh-token")
	public Token refreshToken(@Body Token token);
	

}
