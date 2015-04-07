package dw.mcommerce.com.fdpapp.model;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class CartProduct {
	@Expose
	private boolean updated;
	@Expose
	private boolean create;

	public boolean isCreate() {
		return create;
	}

	public void setCreate(boolean create) {
		this.create = create;
	}

	@SerializedName("id_cart")
	@Expose
	private int idCart;
	@SerializedName("id_product")
	@Expose
	private int idProduct;
	@SerializedName("id_address_delivery")
	@Expose
	private int idAddressDelivery;
	@SerializedName("id_shop")
	@Expose
	private int idShop;
	@SerializedName("id_product_attribute")
	@Expose
	private int idProductAttribute;
	@Expose
	private int quantity;

	/**
	 * 
	 * @return The updated
	 */
	public boolean isUpdated() {
		return updated;
	}

	/**
	 * 
	 * @param updated
	 *            The updated
	 */
	public void setUpdated(boolean updated) {
		this.updated = updated;
	}

	/**
	 * 
	 * @return The idCart
	 */
	public int getIdCart() {
		return idCart;
	}

	/**
	 * 
	 * @param idCart
	 *            The id_cart
	 */
	public void setIdCart(int idCart) {
		this.idCart = idCart;
	}

	/**
	 * 
	 * @return The idProduct
	 */
	public int getIdProduct() {
		return idProduct;
	}

	/**
	 * 
	 * @param idProduct
	 *            The id_product
	 */
	public void setIdProduct(int idProduct) {
		this.idProduct = idProduct;
	}

	/**
	 * 
	 * @return The idAddressDelivery
	 */
	public int getIdAddressDelivery() {
		return idAddressDelivery;
	}

	/**
	 * 
	 * @param idAddressDelivery
	 *            The id_address_delivery
	 */
	public void setIdAddressDelivery(int idAddressDelivery) {
		this.idAddressDelivery = idAddressDelivery;
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

}