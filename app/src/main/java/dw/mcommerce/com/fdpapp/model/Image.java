package dw.mcommerce.com.fdpapp.model;

import org.apache.commons.lang3.builder.EqualsBuilder;
import org.apache.commons.lang3.builder.HashCodeBuilder;
import org.apache.commons.lang3.builder.ToStringBuilder;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class Image {
	public static final String ARGS_IMAGE_URL = "image_url";

	@SerializedName("url_image")
	@Expose
	private String urlImage;
	@SerializedName("id_image")
	@Expose
	private int idImage;
	@Expose
	private int cover;
	@Expose
	private int position;

	/**
	 * 
	 * @return The urlImage
	 */
	public String getUrlImage() {
		return urlImage;
	}

	/**
	 * 
	 * @param urlImage
	 *            The url_image
	 */
	public void setUrlImage(String urlImage) {
		this.urlImage = urlImage;
	}

	/**
	 * 
	 * @return The idImage
	 */
	public int getIdImage() {
		return idImage;
	}

	/**
	 * 
	 * @param idImage
	 *            The id_image
	 */
	public void setIdImage(int idImage) {
		this.idImage = idImage;
	}

	/**
	 * 
	 * @return The cover
	 */
	public int getCover() {
		return cover;
	}

	/**
	 * 
	 * @param cover
	 *            The cover
	 */
	public void setCover(int cover) {
		this.cover = cover;
	}

	/**
	 * 
	 * @return The position
	 */
	public int getPosition() {
		return position;
	}

	/**
	 * 
	 * @param position
	 *            The position
	 */
	public void setPosition(int position) {
		this.position = position;
	}

	@Override
	public String toString() {
		return ToStringBuilder.reflectionToString(this);
	}

	@Override
	public int hashCode() {
		return new HashCodeBuilder().append(urlImage).append(idImage)
				.append(cover).append(position).toHashCode();
	}

	@Override
	public boolean equals(Object other) {
		if (other == this) {
			return true;
		}
		if ((other instanceof Image) == false) {
			return false;
		}
		Image rhs = ((Image) other);
		return new EqualsBuilder().append(urlImage, rhs.urlImage)
				.append(idImage, rhs.idImage).append(cover, rhs.cover)
				.append(position, rhs.position).isEquals();
	}

	
}
