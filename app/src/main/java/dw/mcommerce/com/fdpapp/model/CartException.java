package dw.mcommerce.com.fdpapp.model;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class CartException {

	@SerializedName("http_code")
	@Expose
	private int httpCode;
	@SerializedName("out_of_stock")
	@Expose
	private int out_of_stock;
	
	public int getOut_of_stock() {
		return out_of_stock;
	}

	public void setOut_of_stock(int out_of_stock) {
		this.out_of_stock = out_of_stock;
	}

	@Expose
	private boolean error;
	@Expose
	private boolean create;
	@Expose
	private boolean updated;
	@Expose
	private boolean deleted;
	@Expose
	private String message;

	/**
	 * 
	 * @return The httpCode
	 */
	public int getHttpCode() {
		return httpCode;
	}

	/**
	 * 
	 * @param httpCode
	 *            The http_code
	 */
	public void setHttpCode(int httpCode) {
		this.httpCode = httpCode;
	}

	/**
	 * 
	 * @return The error
	 */
	public boolean isError() {
		return error;
	}

	/**
	 * 
	 * @param error
	 *            The error
	 */
	public void setError(boolean error) {
		this.error = error;
	}

	/**
	 * 
	 * @return The create
	 */
	public boolean isCreate() {
		return create;
	}

	/**
	 * 
	 * @param create
	 *            The create
	 */
	public void setCreate(boolean create) {
		this.create = create;
	}

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
	 * @return The deleted
	 */
	public boolean isDeleted() {
		return deleted;
	}

	/**
	 * 
	 * @param deleted
	 *            The deleted
	 */
	public void setDeleted(boolean deleted) {
		this.deleted = deleted;
	}

	/**
	 * 
	 * @return The message
	 */
	public String getMessage() {
		return message;
	}

	/**
	 * 
	 * @param message
	 *            The message
	 */
	public void setMessage(String message) {
		this.message = message;
	}

}
