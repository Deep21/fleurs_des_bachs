package dw.mcommerce.com.fdpapp.ws;

import retrofit.http.Body;
import retrofit.http.GET;
import retrofit.http.Header;
import retrofit.http.POST;
import retrofit.http.Path;

import com.ecommerce.model.Cart;
import com.ecommerce.model.Customer;
import com.ecommerce.model.Model;

public interface WSCustomer {
	
	@GET("/customer/context/get")
	public Customer getCustomerContext(@Header("Authorization") String token);
	
	@POST("/customer/create")
	public Customer createCustomerAccount(@Body Customer customer);


}
