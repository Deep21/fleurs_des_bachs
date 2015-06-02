package dw.mcommerce.com.fdpapp.model;

import java.util.ArrayList;
import java.util.List;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class ProductModel {
	public static final String ARGS_PRODUCT_ID = "id_product";
	
	@SerializedName("nb_products")
	@Expose
	private int nbProducts;
	@SerializedName("next")
	@Expose
	private int next;
	@Expose
	private String pagination;
	@SerializedName("product")
	@Expose
	private List<Product> productList = new ArrayList<Product>();

	public int getNbProducts() {
		return nbProducts;
	}

	public void setNbProducts(int nbProducts) {
		this.nbProducts = nbProducts;
	}

	/**
	 * 
	 * @return The pagination
	 */
	public String getPagination() {
		return pagination;
	}

	/**
	 * 
	 * @param pagination
	 *            The pagination
	 */
	public void setPagination(String pagination) {
		this.pagination = pagination;
	}

	/**
	 * 
	 * @return The productList
	 */
	public List<Product> getProductList() {
		return productList;
	}

	/**
	 * 
	 * @param productList
	 *            The product_list
	 */
	public void setProductList(List<Product> productList) {
		this.productList = productList;
	}

	public ProductModel withProductList(List<Product> productList) {
		this.productList = productList;
		return this;
	}

	public int getNext() {
		return next;
	}

	public void setNext(int next) {
		this.next = next;
	}

}
