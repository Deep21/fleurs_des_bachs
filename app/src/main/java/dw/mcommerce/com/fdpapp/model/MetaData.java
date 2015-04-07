package dw.mcommerce.com.fdpapp.model;

import java.util.ArrayList;
import java.util.List;

import org.apache.commons.lang3.builder.EqualsBuilder;
import org.apache.commons.lang3.builder.HashCodeBuilder;
import org.apache.commons.lang3.builder.ToStringBuilder;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class MetaData {
	@SerializedName("id_parent")
	@Expose
	private String idParent;
	@SerializedName("id_category")
	@Expose
	private int idCategory;
	@SerializedName("has_product")
	@Expose
	private boolean hasProduct;
	@SerializedName("product_url")
	@Expose
	private String productUrl;
	@SerializedName("id_produit")
	@Expose
	private int idProduit;
	@SerializedName("sub_category")
	@Expose
	private boolean subCategory;
	@SerializedName("sub_category_id")
	@Expose
	private int subCategoryId;
	@SerializedName("sub_category_url")
	@Expose
	private String subCategoryUrl;
	@SerializedName("img_url")
	@Expose
	private String imgUrl;
	@SerializedName("cover_image")
	@Expose
	private String coverImage;
	@Expose
	private List<Integer> images = new ArrayList<Integer>();

	/**
	 * 
	 * @return The images
	 */
	public List<Integer> getImages() {
		return images;
	}

	/**
	 * 
	 * @param images
	 *            The images
	 */
	public void setImages(List<Integer> images) {
		this.images = images;
	}

	/**
	 * 
	 * @return The coverImage
	 */
	public String getCoverImage() {
		return coverImage;
	}

	/**
	 * 
	 * @param coverImage
	 *            The cover_image
	 */
	public void setCoverImage(String coverImage) {
		this.coverImage = coverImage;
	}

	/**
	 * 
	 * @return The idParent
	 */
	public String getIdParent() {
		return idParent;
	}

	/**
	 * 
	 * @param idParent
	 *            The id_parent
	 */
	public void setIdParent(String idParent) {
		this.idParent = idParent;
	}

	/**
	 * 
	 * @return The idCategory
	 */
	public int getIdCategory() {
		return idCategory;
	}

	/**
	 * 
	 * @param idCategory
	 *            The id_category
	 */
	public void setIdCategory(int idCategory) {
		this.idCategory = idCategory;
	}

	/**
	 * 
	 * @return The imgUrl
	 */
	public String getImgUrl() {
		return imgUrl;
	}

	/**
	 * 
	 * @param imgUrl
	 *            The img_url
	 */
	public void setImgUrl(String imgUrl) {
		this.imgUrl = imgUrl;
	}

	/**
	 * 
	 * @return The hasProduct
	 */
	public boolean isHasProduct() {
		return hasProduct;
	}

	/**
	 * 
	 * @param hasProduct
	 *            The has_product
	 */
	public void setHasProduct(boolean hasProduct) {
		this.hasProduct = hasProduct;
	}

	/**
	 * 
	 * @return The productUrl
	 */
	public String getProductUrl() {
		return productUrl;
	}

	/**
	 * 
	 * @param productUrl
	 *            The product_url
	 */
	public void setProductUrl(String productUrl) {
		this.productUrl = productUrl;
	}

	/**
	 * 
	 * @return The idProduit
	 */
	public int getIdProduit() {
		return idProduit;
	}

	/**
	 * 
	 * @param idProduit
	 *            The id_produit
	 */
	public void setIdProduit(int idProduit) {
		this.idProduit = idProduit;
	}

	/**
	 * 
	 * @return The subCategory
	 */
	public boolean isSubCategory() {
		return subCategory;
	}

	/**
	 * 
	 * @param subCategory
	 *            The sub_category
	 */
	public void setSubCategory(boolean subCategory) {
		this.subCategory = subCategory;
	}

	/**
	 * 
	 * @return The subCategoryId
	 */
	public int getSubCategoryId() {
		return subCategoryId;
	}

	/**
	 * 
	 * @param subCategoryId
	 *            The sub_category_id
	 */
	public void setSubCategoryId(int subCategoryId) {
		this.subCategoryId = subCategoryId;
	}

	/**
	 * 
	 * @return The subCategoryUrl
	 */
	public String getSubCategoryUrl() {
		return subCategoryUrl;
	}

	/**
	 * 
	 * @param subCategoryUrl
	 *            The sub_category_url
	 */
	public void setSubCategoryUrl(String subCategoryUrl) {
		this.subCategoryUrl = subCategoryUrl;
	}

	@Override
	public String toString() {
		return ToStringBuilder.reflectionToString(this);
	}

	@Override
	public int hashCode() {
		return new HashCodeBuilder().append(hasProduct).append(productUrl)
				.append(idProduit).append(subCategory).append(subCategoryId)
				.append(subCategoryUrl).toHashCode();
	}

	@Override
	public boolean equals(Object other) {
		if (other == this) {
			return true;
		}
		if ((other instanceof MetaData) == false) {
			return false;
		}
		MetaData rhs = ((MetaData) other);
		return new EqualsBuilder().append(hasProduct, rhs.hasProduct)
				.append(productUrl, rhs.productUrl)
				.append(idProduit, rhs.idProduit)
				.append(subCategory, rhs.subCategory)
				.append(subCategoryId, rhs.subCategoryId)
				.append(subCategoryUrl, rhs.subCategoryUrl).isEquals();
	}

}
