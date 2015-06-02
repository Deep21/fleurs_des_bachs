package dw.mcommerce.com.fdpapp.model;

import java.util.ArrayList;
import java.util.List;

import org.apache.commons.lang3.builder.EqualsBuilder;
import org.apache.commons.lang3.builder.HashCodeBuilder;
import org.apache.commons.lang3.builder.ToStringBuilder;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class Model {

	@Expose
	@SerializedName("category")
	private Category category;
	@Expose
	@SerializedName("product")
	private ProductModel product;
	@SerializedName("detail_product")
	@Expose
	private DetailProduct detailProduct;
	@Expose
	private List<Customer> customer = new ArrayList<Customer>();

	/**
	 * 
	 * @return The customer
	 */
	public List<Customer> getCustomer() {
		return customer;
	}

	/**
	 * 
	 * @param customer
	 *            The customer
	 */
	public void setCustomer(List<Customer> customer) {
		this.customer = customer;
	}

	/**
	 * 
	 * @return The detailProduct
	 */
	public DetailProduct getDetailProduct() {
		return detailProduct;
	}

	/**
	 * 
	 * @param detailProduct
	 *            The detail_product
	 */
	public void setDetailProduct(DetailProduct detailProduct) {
		this.detailProduct = detailProduct;
	}

	/**
	 * 
	 * @return The category
	 */
	public Category getCategory() {
		return category;
	}

	/**
	 * 
	 * @param category
	 *            The category
	 */
	public void setCategory(Category category) {
		this.category = category;
	}

	@Override
	public String toString() {
		return ToStringBuilder.reflectionToString(this);
	}

	/**
	 * 
	 * @return The product
	 */
	public ProductModel getProduct() {
		return product;
	}

	/**
	 * 
	 * @param product
	 *            The product
	 */
	public void setProduct(ProductModel product) {
		this.product = product;
	}

	@Override
	public int hashCode() {
		return new HashCodeBuilder().append(category).toHashCode();
	}

	@Override
	public boolean equals(Object other) {
		if (other == this) {
			return true;
		}
		if ((other instanceof Model) == false) {
			return false;
		}
		Model rhs = ((Model) other);
		return new EqualsBuilder().append(category, rhs.category).isEquals();
	}

}
