package dw.mcommerce.com.fdpapp.model;

import java.util.ArrayList;
import java.util.List;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;
import com.squareup.picasso.Picasso;

import dw.mcommerce.com.fdpapp.R;

public class Product implements Item {

	@SuppressWarnings("serial")
	public static class ProductList extends ArrayList<Product> {}

	@SerializedName("id_product")
	@Expose
	private int idProduct;
	@SerializedName("url_image")
	@Expose
	private String urlImage;
	@SerializedName("id_image")
	@Expose
	private int idImage;
	@SerializedName("in_stock")
	@Expose
	private int inStock;
	@SerializedName("id_supplier")
	@Expose
	private int idSupplier;
	@SerializedName("id_manufacturer")
	@Expose
	private int idManufacturer;
	@SerializedName("id_category_default")
	@Expose
	private int idCategoryDefault;
	@SerializedName("id_tax_rules_group")
	@Expose
	private int idTaxRulesGroup;
	@SerializedName("on_sale")
	@Expose
	private boolean onSale;
	@SerializedName("online_only")
	@Expose
	private boolean onlineOnly;
	@SerializedName("show_price")
	@Expose
	private boolean showPrice;
	@SerializedName("out_of_stock")
	@Expose
	private int outOfStock;
	@SerializedName("product_attribute_minimal_quantity")
	@Expose
	private int productAttributeMinimalQuantity;
	@Expose
	private String produit;
	@SerializedName("available_now")
	@Expose
	private String availableNow;
	@SerializedName("available_later")
	@Expose
	private String availableLater;
	@SerializedName("manufacturer_name")
	@Expose
	private Object manufacturerName;
	@SerializedName("category_default")
	@Expose
	private String categoryDefault;
	@Expose
	private int nouveau;
	@Expose
	private double orderprice;
	@SerializedName("tax_rate")
	@Expose
	private int taxRate;
	@SerializedName("prix_ht")
	@Expose
	private double prixHt;
	@Expose
	private double reduction;
	@SerializedName("reduction_type")
	@Expose
	private String reductionType;
	@SerializedName("price_ttc")
	@Expose
	private int priceTtc;
	@SerializedName("discounted_ttc_price")
	@Expose
	private String discountedTtcPrice;
	@Expose
	private int rate;
	@SerializedName("id_product_attribute")
	@Expose
	private int idProductAttribute;
	@SerializedName("tax_name")
	@Expose
	private String taxName;
	@SerializedName("id_shop_default")
	@Expose
	private int idShopDefault;
	@SerializedName("supplier_name")
	@Expose
	private String supplierName;
	@Expose
	private String name;
	@Expose
	private String description;
	@SerializedName("description_short")
	@Expose
	private String descriptionShort;
	@Expose
	private int quantity;
	@SerializedName("minimal_quantity")
	@Expose
	private int minimalQuantity;
	@Expose
	private double price;
	@SerializedName("additional_shipping_cost")
	@Expose
	private int additionalShippingCost;
	@SerializedName("wholesale_price")
	@Expose
	private int wholesalePrice;
	@Expose
	private double unity;
	@SerializedName("unit_price")
	@Expose
	private double unitPrice;
	@SerializedName("unit_price_ratio")
	@Expose
	private int unitPriceRatio;
	@Expose
	private int ecotax;
	@Expose
	private String reference;
	@SerializedName("supplier_reference")
	@Expose
	private String supplierReference;
	@Expose
	private String location;
	@Expose
	private double width;
	@Expose
	private double height;
	@Expose
	private double depth;
	@Expose
	private double weight;
	@Expose
	private String ean13;
	@Expose
	private String upc;
	@SerializedName("link_rewrite")
	@Expose
	private String linkRewrite;
	@SerializedName("meta_description")
	@Expose
	private String metaDescription;
	@SerializedName("meta_keywords")
	@Expose
	private String metaKeywords;
	@SerializedName("meta_title")
	@Expose
	private String metaTitle;
	@SerializedName("quantity_discount")
	@Expose
	private int quantityDiscount;
	@Expose
	private boolean customizable;
	@SerializedName("new")
	@Expose
	private boolean _new;
	@SerializedName("uploadable_files")
	@Expose
	private int uploadableFiles;
	@SerializedName("text_fields")
	@Expose
	private int textFields;
	@Expose
	private boolean active;
	@SerializedName("redirect_type")
	@Expose
	private boolean redirectType;
	@SerializedName("id_product_redirected")
	@Expose
	private int idProductRedirected;
	@SerializedName("available_for_order")
	@Expose
	private boolean availableForOrder;
	@SerializedName("available_date")
	@Expose
	private String availableDate;
	@Expose
	private String condition;
	@Expose
	private int indexed;
	@Expose
	private String visibility;
	@SerializedName("date_add")
	@Expose
	private String dateAdd;
	@SerializedName("date_upd")
	@Expose
	private String dateUpd;
	@Expose
	private List<Image> images = new ArrayList<Image>();

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
	 * @return The inStock
	 */
	public int getInStock() {
		return inStock;
	}

	/**
	 * 
	 * @param inStock
	 *            The in_stock
	 */
	public void setInStock(int inStock) {
		this.inStock = inStock;
	}

	/**
	 * 
	 * @return The idSupplier
	 */
	public int getIdSupplier() {
		return idSupplier;
	}

	/**
	 * 
	 * @param idSupplier
	 *            The id_supplier
	 */
	public void setIdSupplier(int idSupplier) {
		this.idSupplier = idSupplier;
	}

	/**
	 * 
	 * @return The idManufacturer
	 */
	public int getIdManufacturer() {
		return idManufacturer;
	}

	/**
	 * 
	 * @param idManufacturer
	 *            The id_manufacturer
	 */
	public void setIdManufacturer(int idManufacturer) {
		this.idManufacturer = idManufacturer;
	}

	/**
	 * 
	 * @return The idCategoryDefault
	 */
	public int getIdCategoryDefault() {
		return idCategoryDefault;
	}

	/**
	 * 
	 * @param idCategoryDefault
	 *            The id_category_default
	 */
	public void setIdCategoryDefault(int idCategoryDefault) {
		this.idCategoryDefault = idCategoryDefault;
	}

	/**
	 * 
	 * @return The idTaxRulesGroup
	 */
	public int getIdTaxRulesGroup() {
		return idTaxRulesGroup;
	}

	/**
	 * 
	 * @param idTaxRulesGroup
	 *            The id_tax_rules_group
	 */
	public void setIdTaxRulesGroup(int idTaxRulesGroup) {
		this.idTaxRulesGroup = idTaxRulesGroup;
	}

	/**
	 * 
	 * @return The onSale
	 */
	public boolean isOnSale() {
		return onSale;
	}

	/**
	 * 
	 * @param onSale
	 *            The on_sale
	 */
	public void setOnSale(boolean onSale) {
		this.onSale = onSale;
	}

	/**
	 * 
	 * @return The onlineOnly
	 */
	public boolean isOnlineOnly() {
		return onlineOnly;
	}

	/**
	 * 
	 * @param onlineOnly
	 *            The online_only
	 */
	public void setOnlineOnly(boolean onlineOnly) {
		this.onlineOnly = onlineOnly;
	}

	/**
	 * 
	 * @return The showPrice
	 */
	public boolean isShowPrice() {
		return showPrice;
	}

	/**
	 * 
	 * @param showPrice
	 *            The show_price
	 */
	public void setShowPrice(boolean showPrice) {
		this.showPrice = showPrice;
	}

	/**
	 * 
	 * @return The outOfStock
	 */
	public int getOutOfStock() {
		return outOfStock;
	}

	/**
	 * 
	 * @param outOfStock
	 *            The out_of_stock
	 */
	public void setOutOfStock(int outOfStock) {
		this.outOfStock = outOfStock;
	}

	/**
	 * 
	 * @return The productAttributeMinimalQuantity
	 */
	public int getProductAttributeMinimalQuantity() {
		return productAttributeMinimalQuantity;
	}

	/**
	 * 
	 * @param productAttributeMinimalQuantity
	 *            The product_attribute_minimal_quantity
	 */
	public void setProductAttributeMinimalQuantity(
			int productAttributeMinimalQuantity) {
		this.productAttributeMinimalQuantity = productAttributeMinimalQuantity;
	}

	/**
	 * 
	 * @return The produit
	 */
	public String getProduit() {
		return produit;
	}

	/**
	 * 
	 * @param produit
	 *            The produit
	 */
	public void setProduit(String produit) {
		this.produit = produit;
	}

	/**
	 * 
	 * @return The availableNow
	 */
	public String getAvailableNow() {
		return availableNow;
	}

	/**
	 * 
	 * @param availableNow
	 *            The available_now
	 */
	public void setAvailableNow(String availableNow) {
		this.availableNow = availableNow;
	}

	/**
	 * 
	 * @return The availableLater
	 */
	public String getAvailableLater() {
		return availableLater;
	}

	/**
	 * 
	 * @param availableLater
	 *            The available_later
	 */
	public void setAvailableLater(String availableLater) {
		this.availableLater = availableLater;
	}

	/**
	 * 
	 * @return The manufacturerName
	 */
	public Object getManufacturerName() {
		return manufacturerName;
	}

	/**
	 * 
	 * @param manufacturerName
	 *            The manufacturer_name
	 */
	public void setManufacturerName(Object manufacturerName) {
		this.manufacturerName = manufacturerName;
	}

	/**
	 * 
	 * @return The categoryDefault
	 */
	public String getCategoryDefault() {
		return categoryDefault;
	}

	/**
	 * 
	 * @param categoryDefault
	 *            The category_default
	 */
	public void setCategoryDefault(String categoryDefault) {
		this.categoryDefault = categoryDefault;
	}

	/**
	 * 
	 * @return The nouveau
	 */
	public int getNouveau() {
		return nouveau;
	}

	/**
	 * 
	 * @param nouveau
	 *            The nouveau
	 */
	public void setNouveau(int nouveau) {
		this.nouveau = nouveau;
	}

	/**
	 * 
	 * @return The orderprice
	 */
	public double getOrderprice() {
		return orderprice;
	}

	/**
	 * 
	 * @param orderprice
	 *            The orderprice
	 */
	public void setOrderprice(double orderprice) {
		this.orderprice = orderprice;
	}

	/**
	 * 
	 * @return The taxRate
	 */
	public int getTaxRate() {
		return taxRate;
	}

	/**
	 * 
	 * @param taxRate
	 *            The tax_rate
	 */
	public void setTaxRate(int taxRate) {
		this.taxRate = taxRate;
	}

	/**
	 * 
	 * @return The prixHt
	 */
	public double getPrixHt() {
		return prixHt;
	}

	/**
	 * 
	 * @param prixHt
	 *            The prix_ht
	 */
	public void setPrixHt(double prixHt) {
		this.prixHt = prixHt;
	}

	/**
	 * 
	 * @return The reduction
	 */
	public double getReduction() {
		return reduction;
	}

	/**
	 * 
	 * @param reduction
	 *            The reduction
	 */
	public void setReduction(double reduction) {
		this.reduction = reduction;
	}

	/**
	 * 
	 * @return The reductionType
	 */
	public String getReductionType() {
		return reductionType;
	}

	/**
	 * 
	 * @param reductionType
	 *            The reduction_type
	 */
	public void setReductionType(String reductionType) {
		this.reductionType = reductionType;
	}

	/**
	 * 
	 * @return The priceTtc
	 */
	public int getPriceTtc() {
		return priceTtc;
	}

	/**
	 * 
	 * @param priceTtc
	 *            The price_ttc
	 */
	public void setPriceTtc(int priceTtc) {
		this.priceTtc = priceTtc;
	}

	/**
	 * 
	 * @return The discountedTtcPrice
	 */
	public String getDiscountedTtcPrice() {
		return discountedTtcPrice;
	}

	/**
	 * 
	 * @param discountedTtcPrice
	 *            The discounted_ttc_price
	 */
	public void setDiscountedTtcPrice(String discountedTtcPrice) {
		this.discountedTtcPrice = discountedTtcPrice;
	}

	/**
	 * 
	 * @return The rate
	 */
	public int getRate() {
		return rate;
	}

	/**
	 * 
	 * @param rate
	 *            The rate
	 */
	public void setRate(int rate) {
		this.rate = rate;
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
	 * @return The taxName
	 */
	public String getTaxName() {
		return taxName;
	}

	/**
	 * 
	 * @param taxName
	 *            The tax_name
	 */
	public void setTaxName(String taxName) {
		this.taxName = taxName;
	}

	/**
	 * 
	 * @return The idShopDefault
	 */
	public int getIdShopDefault() {
		return idShopDefault;
	}

	/**
	 * 
	 * @param idShopDefault
	 *            The id_shop_default
	 */
	public void setIdShopDefault(int idShopDefault) {
		this.idShopDefault = idShopDefault;
	}

	/**
	 * 
	 * @param manufacturerName
	 *            The manufacturer_name
	 */
	public void setManufacturerName(String manufacturerName) {
		this.manufacturerName = manufacturerName;
	}

	/**
	 * 
	 * @return The supplierName
	 */
	public String getSupplierName() {
		return supplierName;
	}

	/**
	 * 
	 * @param supplierName
	 *            The supplier_name
	 */
	public void setSupplierName(String supplierName) {
		this.supplierName = supplierName;
	}

	/**
	 * 
	 * @return The name
	 */
	public String getName() {
		return name;
	}

	/**
	 * 
	 * @param name
	 *            The name
	 */
	public void setName(String name) {
		this.name = name;
	}

	/**
	 * 
	 * @return The description
	 */
	public String getDescription() {
		return description;
	}

	/**
	 * 
	 * @param description
	 *            The description
	 */
	public void setDescription(String description) {
		this.description = description;
	}

	/**
	 * 
	 * @return The descriptionShort
	 */
	public String getDescriptionShort() {
		return descriptionShort;
	}

	/**
	 * 
	 * @param descriptionShort
	 *            The description_short
	 */
	public void setDescriptionShort(String descriptionShort) {
		this.descriptionShort = descriptionShort;
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
	 * @return The minimalQuantity
	 */
	public int getMinimalQuantity() {
		return minimalQuantity;
	}

	/**
	 * 
	 * @param minimalQuantity
	 *            The minimal_quantity
	 */
	public void setMinimalQuantity(int minimalQuantity) {
		this.minimalQuantity = minimalQuantity;
	}

	/**
	 * 
	 * @return The price
	 */
	public double getPrice() {
		return price;
	}

	/**
	 * 
	 * @param price
	 *            The price
	 */
	public void setPrice(double price) {
		this.price = price;
	}

	/**
	 * 
	 * @return The additionalShippingCost
	 */
	public int getAdditionalShippingCost() {
		return additionalShippingCost;
	}

	/**
	 * 
	 * @param additionalShippingCost
	 *            The additional_shipping_cost
	 */
	public void setAdditionalShippingCost(int additionalShippingCost) {
		this.additionalShippingCost = additionalShippingCost;
	}

	/**
	 * 
	 * @return The wholesalePrice
	 */
	public int getWholesalePrice() {
		return wholesalePrice;
	}

	/**
	 * 
	 * @param wholesalePrice
	 *            The wholesale_price
	 */
	public void setWholesalePrice(int wholesalePrice) {
		this.wholesalePrice = wholesalePrice;
	}

	/**
	 * 
	 * @return The unity
	 */
	public double getUnity() {
		return unity;
	}

	/**
	 * 
	 * @param unity
	 *            The unity
	 */
	public void setUnity(double unity) {
		this.unity = unity;
	}

	/**
	 * 
	 * @return The unitPrice
	 */
	public double getUnitPrice() {
		return unitPrice;
	}

	/**
	 * 
	 * @param unitPrice
	 *            The unit_price
	 */
	public void setUnitPrice(double unitPrice) {
		this.unitPrice = unitPrice;
	}

	/**
	 * 
	 * @return The unitPriceRatio
	 */
	public int getUnitPriceRatio() {
		return unitPriceRatio;
	}

	/**
	 * 
	 * @param unitPriceRatio
	 *            The unit_price_ratio
	 */
	public void setUnitPriceRatio(int unitPriceRatio) {
		this.unitPriceRatio = unitPriceRatio;
	}

	/**
	 * 
	 * @return The ecotax
	 */
	public int getEcotax() {
		return ecotax;
	}

	/**
	 * 
	 * @param ecotax
	 *            The ecotax
	 */
	public void setEcotax(int ecotax) {
		this.ecotax = ecotax;
	}

	/**
	 * 
	 * @return The reference
	 */
	public String getReference() {
		return reference;
	}

	/**
	 * 
	 * @param reference
	 *            The reference
	 */
	public void setReference(String reference) {
		this.reference = reference;
	}

	/**
	 * 
	 * @return The supplierReference
	 */
	public String getSupplierReference() {
		return supplierReference;
	}

	/**
	 * 
	 * @param supplierReference
	 *            The supplier_reference
	 */
	public void setSupplierReference(String supplierReference) {
		this.supplierReference = supplierReference;
	}

	/**
	 * 
	 * @return The location
	 */
	public String getLocation() {
		return location;
	}

	/**
	 * 
	 * @param location
	 *            The location
	 */
	public void setLocation(String location) {
		this.location = location;
	}

	/**
	 * 
	 * @return The width
	 */
	public double getWidth() {
		return width;
	}

	/**
	 * 
	 * @param width
	 *            The width
	 */
	public void setWidth(double width) {
		this.width = width;
	}

	/**
	 * 
	 * @return The height
	 */
	public double getHeight() {
		return height;
	}

	/**
	 * 
	 * @param height
	 *            The height
	 */
	public void setHeight(double height) {
		this.height = height;
	}

	/**
	 * 
	 * @return The depth
	 */
	public double getDepth() {
		return depth;
	}

	/**
	 * 
	 * @param depth
	 *            The depth
	 */
	public void setDepth(double depth) {
		this.depth = depth;
	}

	/**
	 * 
	 * @return The weight
	 */
	public double getWeight() {
		return weight;
	}

	/**
	 * 
	 * @param weight
	 *            The weight
	 */
	public void setWeight(double weight) {
		this.weight = weight;
	}

	/**
	 * 
	 * @return The ean13
	 */
	public String getEan13() {
		return ean13;
	}

	/**
	 * 
	 * @param ean13
	 *            The ean13
	 */
	public void setEan13(String ean13) {
		this.ean13 = ean13;
	}

	/**
	 * 
	 * @return The upc
	 */
	public String getUpc() {
		return upc;
	}

	/**
	 * 
	 * @param upc
	 *            The upc
	 */
	public void setUpc(String upc) {
		this.upc = upc;
	}

	/**
	 * 
	 * @return The linkRewrite
	 */
	public String getLinkRewrite() {
		return linkRewrite;
	}

	/**
	 * 
	 * @param linkRewrite
	 *            The link_rewrite
	 */
	public void setLinkRewrite(String linkRewrite) {
		this.linkRewrite = linkRewrite;
	}

	/**
	 * 
	 * @return The metaDescription
	 */
	public String getMetaDescription() {
		return metaDescription;
	}

	/**
	 * 
	 * @param metaDescription
	 *            The meta_description
	 */
	public void setMetaDescription(String metaDescription) {
		this.metaDescription = metaDescription;
	}

	/**
	 * 
	 * @return The metaKeywords
	 */
	public String getMetaKeywords() {
		return metaKeywords;
	}

	/**
	 * 
	 * @param metaKeywords
	 *            The meta_keywords
	 */
	public void setMetaKeywords(String metaKeywords) {
		this.metaKeywords = metaKeywords;
	}

	/**
	 * 
	 * @return The metaTitle
	 */
	public String getMetaTitle() {
		return metaTitle;
	}

	/**
	 * 
	 * @param metaTitle
	 *            The meta_title
	 */
	public void setMetaTitle(String metaTitle) {
		this.metaTitle = metaTitle;
	}

	/**
	 * 
	 * @return The quantityDiscount
	 */
	public int getQuantityDiscount() {
		return quantityDiscount;
	}

	/**
	 * 
	 * @param quantityDiscount
	 *            The quantity_discount
	 */
	public void setQuantityDiscount(int quantityDiscount) {
		this.quantityDiscount = quantityDiscount;
	}

	/**
	 * 
	 * @return The customizable
	 */
	public boolean isCustomizable() {
		return customizable;
	}

	/**
	 * 
	 * @param customizable
	 *            The customizable
	 */
	public void setCustomizable(boolean customizable) {
		this.customizable = customizable;
	}

	/**
	 * 
	 * @return The _new
	 */
	public boolean isNew() {
		return _new;
	}

	/**
	 * 
	 * @param _new
	 *            The new
	 */
	public void setNew(boolean _new) {
		this._new = _new;
	}

	/**
	 * 
	 * @return The uploadableFiles
	 */
	public int getUploadableFiles() {
		return uploadableFiles;
	}

	/**
	 * 
	 * @param uploadableFiles
	 *            The uploadable_files
	 */
	public void setUploadableFiles(int uploadableFiles) {
		this.uploadableFiles = uploadableFiles;
	}

	/**
	 * 
	 * @return The textFields
	 */
	public int getTextFields() {
		return textFields;
	}

	/**
	 * 
	 * @param textFields
	 *            The text_fields
	 */
	public void setTextFields(int textFields) {
		this.textFields = textFields;
	}

	/**
	 * 
	 * @return The active
	 */
	public boolean isActive() {
		return active;
	}

	/**
	 * 
	 * @param active
	 *            The active
	 */
	public void setActive(boolean active) {
		this.active = active;
	}

	/**
	 * 
	 * @return The redirectType
	 */
	public boolean isRedirectType() {
		return redirectType;
	}

	/**
	 * 
	 * @param redirectType
	 *            The redirect_type
	 */
	public void setRedirectType(boolean redirectType) {
		this.redirectType = redirectType;
	}

	/**
	 * 
	 * @return The idProductRedirected
	 */
	public int getIdProductRedirected() {
		return idProductRedirected;
	}

	/**
	 * 
	 * @param idProductRedirected
	 *            The id_product_redirected
	 */
	public void setIdProductRedirected(int idProductRedirected) {
		this.idProductRedirected = idProductRedirected;
	}

	/**
	 * 
	 * @return The availableForOrder
	 */
	public boolean isAvailableForOrder() {
		return availableForOrder;
	}

	/**
	 * 
	 * @param availableForOrder
	 *            The available_for_order
	 */
	public void setAvailableForOrder(boolean availableForOrder) {
		this.availableForOrder = availableForOrder;
	}

	/**
	 * 
	 * @return The availableDate
	 */
	public String getAvailableDate() {
		return availableDate;
	}

	/**
	 * 
	 * @param availableDate
	 *            The available_date
	 */
	public void setAvailableDate(String availableDate) {
		this.availableDate = availableDate;
	}

	/**
	 * 
	 * @return The condition
	 */
	public String getCondition() {
		return condition;
	}

	/**
	 * 
	 * @param condition
	 *            The condition
	 */
	public void setCondition(String condition) {
		this.condition = condition;
	}

	/**
	 * 
	 * @return The indexed
	 */
	public int getIndexed() {
		return indexed;
	}

	/**
	 * 
	 * @param indexed
	 *            The indexed
	 */
	public void setIndexed(int indexed) {
		this.indexed = indexed;
	}

	/**
	 * 
	 * @return The visibility
	 */
	public String getVisibility() {
		return visibility;
	}

	/**
	 * 
	 * @param visibility
	 *            The visibility
	 */
	public void setVisibility(String visibility) {
		this.visibility = visibility;
	}

	/**
	 * 
	 * @return The dateAdd
	 */
	public String getDateAdd() {
		return dateAdd;
	}

	/**
	 * 
	 * @param dateAdd
	 *            The date_add
	 */
	public void setDateAdd(String dateAdd) {
		this.dateAdd = dateAdd;
	}

	/**
	 * 
	 * @return The dateUpd
	 */
	public String getDateUpd() {
		return dateUpd;
	}

	/**
	 * 
	 * @param dateUpd
	 *            The date_upd
	 */
	public void setDateUpd(String dateUpd) {
		this.dateUpd = dateUpd;
	}

	/**
	 * 
	 * @return The images
	 */
	public List<Image> getImages() {
		return images;
	}

	/**
	 * 
	 * @param images
	 *            The images
	 */
	public void setImages(List<Image> images) {
		this.images = images;
	}
	

	@Override
	public View getView(LayoutInflater inflator, View convertView, ViewGroup parent, int position) {
		ViewHolder holder;
		if (convertView == null) {
			holder = new ViewHolder();
			convertView = inflator.inflate(R.layout.product_list_layout, parent, false);
			holder.libelle_produit = (TextView) convertView .findViewById(R.id.libelle_produit);
			holder.description_short = (TextView) convertView.findViewById(R.id.description_short);
			holder.prix_ttc = (TextView) convertView.findViewById(R.id.prix_ttc);
			holder.stock = (TextView) convertView.findViewById(R.id.stock);
			holder.product_image = (ImageView) convertView.findViewById(R.id.product_image);
			convertView.setTag(holder);
		} else {
			holder = (ViewHolder) convertView.getTag();
		}
		holder.libelle_produit.setText(getProduit());
		holder.description_short.setText(getDescriptionShort());
		holder.prix_ttc.setText(Integer.toString(getPriceTtc()));
		holder.stock.setText("En stock");
		Picasso.with(parent.getContext()).load(getUrlImage()).into(holder.product_image);
		return convertView;
	}

	@Override
	public int getId(int position) {
		return 0;
	}

	@Override
	public int getViewType() {
		return 0;
	}
	
	public static class ViewHolder {
		TextView libelle_produit;
		TextView prix_ttc;
		TextView stock;
		TextView description_short;
		ImageView product_image;

	}

}
