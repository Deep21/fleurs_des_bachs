package dw.mcommerce.com.fdpapp.model;

import org.apache.commons.lang3.builder.EqualsBuilder;
import org.apache.commons.lang3.builder.HashCodeBuilder;
import org.apache.commons.lang3.builder.ToStringBuilder;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class Token {
	public static final String OAUTH_ACCES_TOKEN = "access_token";
	public static final String OAUTH_REFRESH_TOKEN = "refresh_token";
	public static final String BEARER_TOKEN = "bearer_tolen";
	
	@SerializedName("grant_type")
	@Expose
	private String grantType;
	@SerializedName("client_id")
	@Expose
	private String clientId;
	@SerializedName("client_secret")
	@Expose
	private String clientSecret;
	@Expose
	private String username;
	@Expose
	private String password;

	@SerializedName("access_token")
	@Expose
	private String accessToken;
	@SerializedName("expires_in")
	@Expose
	private Integer expiresIn;
	@SerializedName("token_type")
	@Expose
	private String tokenType;
	@Expose
	private Object scope;
	@SerializedName("refresh_token")
	@Expose
	private String refreshToken;

	/**
	 * 
	 * @return The accessToken
	 */
	public String getAccessToken() {
		return accessToken;
	}

	/**
	 * 
	 * @param accessToken
	 *            The access_token
	 */
	public void setAccessToken(String accessToken) {
		this.accessToken = accessToken;
	}

	/**
	 * 
	 * @return The expiresIn
	 */
	public Integer getExpiresIn() {
		return expiresIn;
	}

	/**
	 * 
	 * @param expiresIn
	 *            The expires_in
	 */
	public void setExpiresIn(Integer expiresIn) {
		this.expiresIn = expiresIn;
	}

	/**
	 * 
	 * @return The tokenType
	 */
	public String getTokenType() {
		return tokenType;
	}

	/**
	 * 
	 * @param tokenType
	 *            The token_type
	 */
	public void setTokenType(String tokenType) {
		this.tokenType = tokenType;
	}

	/**
	 * 
	 * @return The scope
	 */
	public Object getScope() {
		return scope;
	}

	/**
	 * 
	 * @param scope
	 *            The scope
	 */
	public void setScope(Object scope) {
		this.scope = scope;
	}

	/**
	 * 
	 * @return The refreshToken
	 */
	public String getRefreshToken() {
		return refreshToken;
	}

	/**
	 * 
	 * @param refreshToken
	 *            The refresh_token
	 */
	public void setRefreshToken(String refreshToken) {
		this.refreshToken = refreshToken;
	}

	/**
	 * 
	 * @return The grantType
	 */
	public String getGrantType() {
		return grantType;
	}

	/**
	 * 
	 * @param grantType
	 *            The grant_type
	 */
	public void setGrantType(String grantType) {
		this.grantType = grantType;
	}

	/**
	 * 
	 * @return The clientId
	 */
	public String getClientId() {
		return clientId;
	}

	/**
	 * 
	 * @param clientId
	 *            The client_id
	 */
	public void setClientId(String clientId) {
		this.clientId = clientId;
	}

	/**
	 * 
	 * @return The clientSecret
	 */
	public String getClientSecret() {
		return clientSecret;
	}

	/**
	 * 
	 * @param clientSecret
	 *            The client_secret
	 */
	public void setClientSecret(String clientSecret) {
		this.clientSecret = clientSecret;
	}

	/**
	 * 
	 * @return The username
	 */
	public String getUsername() {
		return username;
	}

	/**
	 * 
	 * @param username
	 *            The username
	 */
	public void setUsername(String username) {
		this.username = username;
	}

	/**
	 * 
	 * @return The password
	 */
	public String getPassword() {
		return password;
	}

	/**
	 * 
	 * @param password
	 *            The password
	 */
	public void setPassword(String password) {
		this.password = password;
	}

	@Override
	public String toString() {
		return ToStringBuilder.reflectionToString(this);
	}

	@Override
	public int hashCode() {
		return new HashCodeBuilder().append(grantType).append(clientId)
				.append(clientSecret).append(username).append(password)
				.toHashCode();
	}

	@Override
	public boolean equals(Object other) {
		if (other == this) {
			return true;
		}
		if ((other instanceof Token) == false) {
			return false;
		}
		Token rhs = ((Token) other);
		return new EqualsBuilder().append(grantType, rhs.grantType)
				.append(clientId, rhs.clientId)
				.append(clientSecret, rhs.clientSecret)
				.append(username, rhs.username).append(password, rhs.password)
				.isEquals();
	}
}
