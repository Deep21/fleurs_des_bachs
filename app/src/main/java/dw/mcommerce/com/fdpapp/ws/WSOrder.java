package dw.mcommerce.com.fdpapp.ws;

import retrofit.http.GET;
import retrofit.http.Header;
import retrofit.http.Path;

import com.ecommerce.model.OrderHistory;

public interface WSOrder {
	
	@GET("/order/{id_order}/get")
	public OrderHistory getOrderById(@Path("id_order") int id_order, @Header("Authorization") String token);
	
	@GET("/order/customer/{id_customer}/get")
	public OrderHistory.OrderList getOrderByCustomerId(@Path("id_customer") int id_order, @Header("Authorization") String token);
	

}
