package dw.mcommerce.com.fdpapp.model;

import java.sql.Date;
import java.util.List;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class Cart {
	@Expose
	@SerializedName("id_cart")
	private int id_cart;
	@Expose
	@SerializedName("id_shop_group")
	private int id_shop_group;
	@Expose
	@SerializedName("id_shop")
	private int id_shop;
	@Expose
	@SerializedName("id_carrier")
	private int id_carrier;
	@Expose
	@SerializedName("delivery_option")
	private String delivery_option;
	@Expose
	@SerializedName("id_lang")
	private int id_lang;
	@Expose
	@SerializedName("id_address_delivery")
	private int id_address_delivery;
	@Expose
	@SerializedName("id_address_invoice")
	private int id_address_invoice;
	@Expose
	@SerializedName("id_currency")
	private int id_currency;
	@Expose
	@SerializedName("id_customer")
	private int id_customer;
	@Expose
	@SerializedName("id_guest")
	private int id_guest;
	@Expose
	@SerializedName("secure_key")
	private String secure_key;
	@Expose
	@SerializedName("recyclable")
	private boolean recyclable;
	@Expose
	@SerializedName("gift")
	private boolean gift;
	@Expose
	@SerializedName("gift_message")
	private String gift_message;
	@Expose
	@SerializedName("mobile_theme")
	private boolean mobile_theme;
	@Expose
	@SerializedName("allow_seperated_package")
	private boolean allow_seperated_package;
	@Expose
	@SerializedName("date_add")
	private Date date_add;
	@Expose
	@SerializedName("date_upd")
	private Date date_upd;
	
	@Expose
	private CartItem cart;
	@Expose
	@SerializedName("product")
	private List<Product> product;

	/**
	 * 
	 * @return The cart
	 */
	public CartItem getCart() {
		return cart;
	}

	/**
	 * 
	 * @param cart
	 *            The cart
	 */
	public void setCart(CartItem cart) {
		this.cart = cart;
	}

	/**
	 * 
	 * @return The product
	 */
	public List<Product> getProduct() {
		return product;
	}

	/**
	 * 
	 * @param product
	 *            The product
	 */
	public void setProduct(List<Product> product) {
		this.product = product;
	}

	public int getId_cart() {
		return id_cart;
	}

	public void setId_cart(int id_cart) {
		this.id_cart = id_cart;
	}

	public int getId_shop_group() {
		return id_shop_group;
	}

	public void setId_shop_group(int id_shop_group) {
		this.id_shop_group = id_shop_group;
	}

	public int getId_shop() {
		return id_shop;
	}

	public void setId_shop(int id_shop) {
		this.id_shop = id_shop;
	}

	public int getId_carrier() {
		return id_carrier;
	}

	public void setId_carrier(int id_carrier) {
		this.id_carrier = id_carrier;
	}

	public String getDelivery_option() {
		return delivery_option;
	}

	public void setDelivery_option(String delivery_option) {
		this.delivery_option = delivery_option;
	}

	public int getId_lang() {
		return id_lang;
	}

	public void setId_lang(int id_lang) {
		this.id_lang = id_lang;
	}

	public int getId_address_delivery() {
		return id_address_delivery;
	}

	public void setId_address_delivery(int id_address_delivery) {
		this.id_address_delivery = id_address_delivery;
	}

	public int getId_address_invoice() {
		return id_address_invoice;
	}

	public void setId_address_invoice(int id_address_invoice) {
		this.id_address_invoice = id_address_invoice;
	}

	public int getId_currency() {
		return id_currency;
	}

	public void setId_currency(int id_currency) {
		this.id_currency = id_currency;
	}

	public int getId_customer() {
		return id_customer;
	}

	public void setId_customer(int id_customer) {
		this.id_customer = id_customer;
	}

	public int getId_guest() {
		return id_guest;
	}

	public void setId_guest(int id_guest) {
		this.id_guest = id_guest;
	}

	public String getSecure_key() {
		return secure_key;
	}

	public void setSecure_key(String secure_key) {
		this.secure_key = secure_key;
	}

	public boolean isRecyclable() {
		return recyclable;
	}

	public void setRecyclable(boolean recyclable) {
		this.recyclable = recyclable;
	}

	public boolean isGift() {
		return gift;
	}

	public void setGift(boolean gift) {
		this.gift = gift;
	}

	public String getGift_message() {
		return gift_message;
	}

	public void setGift_message(String gift_message) {
		this.gift_message = gift_message;
	}

	public boolean isMobile_theme() {
		return mobile_theme;
	}

	public void setMobile_theme(boolean mobile_theme) {
		this.mobile_theme = mobile_theme;
	}

	public boolean isAllow_seperated_package() {
		return allow_seperated_package;
	}

	public void setAllow_seperated_package(boolean allow_seperated_package) {
		this.allow_seperated_package = allow_seperated_package;
	}

	public Date getDate_add() {
		return date_add;
	}

	public void setDate_add(Date date_add) {
		this.date_add = date_add;
	}

	public Date getDate_upd() {
		return date_upd;
	}

	public void setDate_upd(Date date_upd) {
		this.date_upd = date_upd;
	}
}
