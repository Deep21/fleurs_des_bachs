package dw.mcommerce.com.fdpapp.model;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class Customer {

	@SerializedName("id_customer")
	@Expose
	private int idCustomer;
	@Expose
	private String email;
	@Expose
	private String firstname;
	@Expose
	private String lastname;
	@Expose
	private String pwd;
	@Expose
	private String pwdconfirmed;
	@Expose
	private String gender;
	@Expose
	private String birthday;
	@Expose
	private int code;
	@Expose
	private Cart cart;
	
	public Cart getCart() {
		return cart;
	}

	public void setCart(Cart cart) {
		this.cart = cart;
	}

	public int getCode() {
		return code;
	}

	public void setCode(int code) {
		this.code = code;
	}

	/**
	 * 
	 * @return The idCustomer
	 */
	public int getIdCustomer() {
		return idCustomer;
	}

	/**
	 * 
	 * @param idCustomer
	 *            The id_customer
	 */
	public void setIdCustomer(int idCustomer) {
		this.idCustomer = idCustomer;
	}

	/**
	 * 
	 * @return The email
	 */
	public String getEmail() {
		return email;
	}

	/**
	 * 
	 * @param email
	 *            The email
	 */
	public void setEmail(String email) {
		this.email = email;
	}

	/**
	 * 
	 * @return The firstname
	 */
	public String getFirstname() {
		return firstname;
	}

	/**
	 * 
	 * @param firstname
	 *            The firstname
	 */
	public void setFirstname(String firstname) {
		this.firstname = firstname;
	}

	/**
	 * 
	 * @return The lastname
	 */
	public String getLastname() {
		return lastname;
	}

	/**
	 * 
	 * @param lastname
	 *            The lastname
	 */
	public void setLastname(String lastname) {
		this.lastname = lastname;
	}

	/**
	 * 
	 * @return The pwd
	 */
	public String getPwd() {
		return pwd;
	}

	/**
	 * 
	 * @param pwd
	 *            The pwd
	 */
	public void setPwd(String pwd) {
		this.pwd = pwd;
	}

	/**
	 * 
	 * @return The pwdconfirmed
	 */
	public String getPwdconfirmed() {
		return pwdconfirmed;
	}

	/**
	 * 
	 * @param pwdconfirmed
	 *            The pwdconfirmed
	 */
	public void setPwdconfirmed(String pwdconfirmed) {
		this.pwdconfirmed = pwdconfirmed;
	}

	/**
	 * 
	 * @return The gender
	 */
	public String getGender() {
		return gender;
	}

	/**
	 * 
	 * @param gender
	 *            The gender
	 */
	public void setGender(String gender) {
		this.gender = gender;
	}

	/**
	 * 
	 * @return The birthday
	 */
	public String getBirthday() {
		return birthday;
	}

	/**
	 * 
	 * @param birthday
	 *            The birthday
	 */
	public void setBirthday(String birthday) {
		this.birthday = birthday;
	}
}
