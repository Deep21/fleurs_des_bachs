package dw.mcommerce.com.fdpapp.model;

import org.apache.commons.lang3.builder.EqualsBuilder;
import org.apache.commons.lang3.builder.HashCodeBuilder;
import org.apache.commons.lang3.builder.ToStringBuilder;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class Commande {

	@SerializedName("product_name")
	@Expose
	private String productName;
	@SerializedName("product_price")
	@Expose
	private Double product_price;
	@SerializedName("product_quantity")
	@Expose
	private int productQuantity;
	@SerializedName("total_price_tax_incl")
	@Expose
	private double totalPriceTaxIncl;
	@SerializedName("id_image")
	@Expose
	private int idImage;
	@SerializedName("img_link")
	@Expose
	private String imgLink;

	/**
	 * 
	 * @return The productName
	 */
	public String getProductName() {
		return productName;
	}

	/**
	 * 
	 * @param productName
	 *            The product_name
	 */
	public void setProductName(String productName) {
		this.productName = productName;
	}

	/**
	 * 
	 * @return The productQuantity
	 */
	public int getProductQuantity() {
		return productQuantity;
	}

	/**
	 * 
	 * @param productQuantity
	 *            The product_quantity
	 */
	public void setProductQuantity(int productQuantity) {
		this.productQuantity = productQuantity;
	}

	/**
	 * 
	 * @return The totalPriceTaxIncl
	 */
	public double getTotalPriceTaxIncl() {
		return totalPriceTaxIncl;
	}

	/**
	 * 
	 * @param totalPriceTaxIncl
	 *            The total_price_tax_incl
	 */
	public void setTotalPriceTaxIncl(double totalPriceTaxIncl) {
		this.totalPriceTaxIncl = totalPriceTaxIncl;
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
	 * @return The imgLink
	 */
	public String getImgLink() {
		return imgLink;
	}

	/**
	 * 
	 * @param imgLink
	 *            The img_link
	 */
	public void setImgLink(String imgLink) {
		this.imgLink = imgLink;
	}

	public Double getProduct_price() {
		return product_price;
	}

	public void setProduct_price(Double product_price) {
		this.product_price = product_price;
	}

	@Override
	public String toString() {
		return ToStringBuilder.reflectionToString(this);
	}

	@Override
	public int hashCode() {
		return new HashCodeBuilder().append(productName)
				.append(productQuantity).append(totalPriceTaxIncl)
				.append(idImage).append(imgLink).toHashCode();
	}

	@Override
	public boolean equals(Object other) {
		if (other == this) {
			return true;
		}
		if ((other instanceof Commande) == false) {
			return false;
		}
		Commande rhs = ((Commande) other);
		return new EqualsBuilder().append(productName, rhs.productName)
				.append(productQuantity, rhs.productQuantity)
				.append(totalPriceTaxIncl, rhs.totalPriceTaxIncl)
				.append(idImage, rhs.idImage).append(imgLink, rhs.imgLink)
				.isEquals();
	}

}
