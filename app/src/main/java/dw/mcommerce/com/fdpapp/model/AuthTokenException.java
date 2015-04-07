package dw.mcommerce.com.fdpapp.model;

import java.util.ArrayList;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class AuthTokenException {

	@Expose
	private String error;
	@SerializedName("error_description")
	@Expose
	private String errorDescription;

	/**
	 * 
	 * @return The error
	 */
	public String getError() {
		return error;
	}

	/**
	 * 
	 * @param error
	 *            The error
	 */
	public void setError(String error) {
		this.error = error;
	}

	/**
	 * 
	 * @return The errorDescription
	 */
	public String getErrorDescription() {
		return errorDescription;
	}

	/**
	 * 
	 * @param errorDescription
	 *            The error_description
	 */
	public void setErrorDescription(String errorDescription) {
		this.errorDescription = errorDescription;
	}
	
	@Override
	public String toString() {
		return error + errorDescription;
	}
	public static class List extends ArrayList<AuthTokenException>{

		/**
		 * 
		 */
		private static final long serialVersionUID = 1L;}
}
