package dw.mcommerce.com.fdpapp.ws;

import java.util.Map;

import retrofit.http.GET;
import retrofit.http.Path;
import retrofit.http.QueryMap;

import com.ecommerce.model.Product;
import com.ecommerce.model.ProductModel;

public interface WSProduct {
	
	@GET("/category/{id_category}/product/get")
	public ProductModel getProductListByCategoryId(@Path("id_category") int id_category, @QueryMap Map<String, String> filter);
	
	@GET("/product/{id_product}/get")
	public Product getProductDetailListByProductId(@Path("id_product") int id_product);

}
