package dw.mcommerce.com.fdpapp.model;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class CartItem {
	@SerializedName("id_product_attribute")
	@Expose
	private int idProductAttribute;
	@Expose
	private int quantity;
	@SerializedName("id_shop")
	@Expose
	private int idShop;

	/**
	 * 
	 * @return The idProductAttribute
	 */
	public int getIdProductAttribute() {
		return idProductAttribute;
	}

	/**
	 * 
	 * @param idProductAttribute
	 *            The id_product_attribute
	 */
	public void setIdProductAttribute(int idProductAttribute) {
		this.idProductAttribute = idProductAttribute;
	}

	/**
	 * 
	 * @return The quantity
	 */
	public int getQuantity() {
		return quantity;
	}

	/**
	 * 
	 * @param quantity
	 *            The quantity
	 */
	public void setQuantity(int quantity) {
		this.quantity = quantity;
	}

	/**
	 * 
	 * @return The idShop
	 */
	public int getIdShop() {
		return idShop;
	}

	/**
	 * 
	 * @param idShop
	 *            The id_shop
	 */
	public void setIdShop(int idShop) {
		this.idShop = idShop;
	}
}
