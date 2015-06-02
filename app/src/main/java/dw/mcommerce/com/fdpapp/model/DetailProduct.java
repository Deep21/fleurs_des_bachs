package dw.mcommerce.com.fdpapp.model;

import java.util.ArrayList;
import java.util.List;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;


public class DetailProduct {

    @Expose
    private List<Image> images = new ArrayList<Image>();
    @Expose
    private double rate;
    @SerializedName("id_product")
    @Expose
    private int idProduct;
    @SerializedName("id_image")
    @Expose
    private int idImage;
    @SerializedName("id_product_attribute")
    @Expose
    private int idProductAttribute;
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
    private int onSale;
    @SerializedName("online_only")
    @Expose
    private int onlineOnly;
    @Expose
    private double price;
    @SerializedName("show_price")
    @Expose
    private int showPrice;
    @Expose
    private Object reduction;
    @SerializedName("reduction_type")
    @Expose
    private Object reductionType;
    @SerializedName("out_of_stock")
    @Expose
    private int outOfStock;
    @Expose
    private int quantity;
    @SerializedName("product_attribute_minimal_quantity")
    @Expose
    private Object productAttributeMinimalQuantity;
    @SerializedName("libelle_produit")
    @Expose
    private String libelleProduit;
    @SerializedName("description_short")
    @Expose
    private String descriptionShort;
    @Expose
    private String condition;
    @Expose
    private String reference;
    @Expose
    private double width;
    @Expose
    private double height;
    @Expose
    private double depth;
    @Expose
    private double weight;
    @SerializedName("description_long")
    @Expose
    private String descriptionLong;
    @SerializedName("available_now")
    @Expose
    private String availableNow;
    @SerializedName("available_later")
    @Expose
    private String availableLater;
    @SerializedName("manufacturer_name")
    @Expose
    private String manufacturerName;
    @SerializedName("category_default")
    @Expose
    private String categoryDefault;
    @Expose
    private int nouveau;
    @Expose
    private double orderprice;

    /**
     * 
     * @return
     *     The images
     */
    public List<Image> getImages() {
        return images;
    }

    /**
     * 
     * @param images
     *     The images
     */
    public void setImages(List<Image> images) {
        this.images = images;
    }

    /**
     * 
     * @return
     *     The rate
     */
    public double getRate() {
        return rate;
    }

    /**
     * 
     * @param rate
     *     The rate
     */
    public void setRate(double rate) {
        this.rate = rate;
    }

    /**
     * 
     * @return
     *     The idProduct
     */
    public int getIdProduct() {
        return idProduct;
    }

    /**
     * 
     * @param idProduct
     *     The id_product
     */
    public void setIdProduct(int idProduct) {
        this.idProduct = idProduct;
    }

    /**
     * 
     * @return
     *     The idImage
     */
    public int getIdImage() {
        return idImage;
    }

    /**
     * 
     * @param idImage
     *     The id_image
     */
    public void setIdImage(int idImage) {
        this.idImage = idImage;
    }

    /**
     * 
     * @return
     *     The idProductAttribute
     */
    public int getIdProductAttribute() {
        return idProductAttribute;
    }

    /**
     * 
     * @param idProductAttribute
     *     The id_product_attribute
     */
    public void setIdProductAttribute(int idProductAttribute) {
        this.idProductAttribute = idProductAttribute;
    }

    /**
     * 
     * @return
     *     The idSupplier
     */
    public int getIdSupplier() {
        return idSupplier;
    }

    /**
     * 
     * @param idSupplier
     *     The id_supplier
     */
    public void setIdSupplier(int idSupplier) {
        this.idSupplier = idSupplier;
    }

    /**
     * 
     * @return
     *     The idManufacturer
     */
    public int getIdManufacturer() {
        return idManufacturer;
    }

    /**
     * 
     * @param idManufacturer
     *     The id_manufacturer
     */
    public void setIdManufacturer(int idManufacturer) {
        this.idManufacturer = idManufacturer;
    }

    /**
     * 
     * @return
     *     The idCategoryDefault
     */
    public int getIdCategoryDefault() {
        return idCategoryDefault;
    }

    /**
     * 
     * @param idCategoryDefault
     *     The id_category_default
     */
    public void setIdCategoryDefault(int idCategoryDefault) {
        this.idCategoryDefault = idCategoryDefault;
    }

    /**
     * 
     * @return
     *     The idTaxRulesGroup
     */
    public int getIdTaxRulesGroup() {
        return idTaxRulesGroup;
    }

    /**
     * 
     * @param idTaxRulesGroup
     *     The id_tax_rules_group
     */
    public void setIdTaxRulesGroup(int idTaxRulesGroup) {
        this.idTaxRulesGroup = idTaxRulesGroup;
    }

    /**
     * 
     * @return
     *     The onSale
     */
    public int getOnSale() {
        return onSale;
    }

    /**
     * 
     * @param onSale
     *     The on_sale
     */
    public void setOnSale(int onSale) {
        this.onSale = onSale;
    }

    /**
     * 
     * @return
     *     The onlineOnly
     */
    public int getOnlineOnly() {
        return onlineOnly;
    }

    /**
     * 
     * @param onlineOnly
     *     The online_only
     */
    public void setOnlineOnly(int onlineOnly) {
        this.onlineOnly = onlineOnly;
    }

    /**
     * 
     * @return
     *     The price
     */
    public double getPrice() {
        return price;
    }

    /**
     * 
     * @param price
     *     The price
     */
    public void setPrice(double price) {
        this.price = price;
    }

    /**
     * 
     * @return
     *     The showPrice
     */
    public int getShowPrice() {
        return showPrice;
    }

    /**
     * 
     * @param showPrice
     *     The show_price
     */
    public void setShowPrice(int showPrice) {
        this.showPrice = showPrice;
    }

    /**
     * 
     * @return
     *     The reduction
     */
    public Object getReduction() {
        return reduction;
    }

    /**
     * 
     * @param reduction
     *     The reduction
     */
    public void setReduction(Object reduction) {
        this.reduction = reduction;
    }

    /**
     * 
     * @return
     *     The reductionType
     */
    public Object getReductionType() {
        return reductionType;
    }

    /**
     * 
     * @param reductionType
     *     The reduction_type
     */
    public void setReductionType(Object reductionType) {
        this.reductionType = reductionType;
    }

    /**
     * 
     * @return
     *     The outOfStock
     */
    public int getOutOfStock() {
        return outOfStock;
    }

    /**
     * 
     * @param outOfStock
     *     The out_of_stock
     */
    public void setOutOfStock(int outOfStock) {
        this.outOfStock = outOfStock;
    }

    /**
     * 
     * @return
     *     The quantity
     */
    public int getQuantity() {
        return quantity;
    }

    /**
     * 
     * @param quantity
     *     The quantity
     */
    public void setQuantity(int quantity) {
        this.quantity = quantity;
    }

    /**
     * 
     * @return
     *     The productAttributeMinimalQuantity
     */
    public Object getProductAttributeMinimalQuantity() {
        return productAttributeMinimalQuantity;
    }

    /**
     * 
     * @param productAttributeMinimalQuantity
     *     The product_attribute_minimal_quantity
     */
    public void setProductAttributeMinimalQuantity(Object productAttributeMinimalQuantity) {
        this.productAttributeMinimalQuantity = productAttributeMinimalQuantity;
    }

    /**
     * 
     * @return
     *     The libelleProduit
     */
    public String getLibelleProduit() {
        return libelleProduit;
    }

    /**
     * 
     * @param libelleProduit
     *     The libelle_produit
     */
    public void setLibelleProduit(String libelleProduit) {
        this.libelleProduit = libelleProduit;
    }

    /**
     * 
     * @return
     *     The descriptionShort
     */
    public String getDescriptionShort() {
        return descriptionShort;
    }

    /**
     * 
     * @param descriptionShort
     *     The description_short
     */
    public void setDescriptionShort(String descriptionShort) {
        this.descriptionShort = descriptionShort;
    }

    /**
     * 
     * @return
     *     The condition
     */
    public String getCondition() {
        return condition;
    }

    /**
     * 
     * @param condition
     *     The condition
     */
    public void setCondition(String condition) {
        this.condition = condition;
    }

    /**
     * 
     * @return
     *     The reference
     */
    public String getReference() {
        return reference;
    }

    /**
     * 
     * @param reference
     *     The reference
     */
    public void setReference(String reference) {
        this.reference = reference;
    }

    /**
     * 
     * @return
     *     The width
     */
    public double getWidth() {
        return width;
    }

    /**
     * 
     * @param width
     *     The width
     */
    public void setWidth(double width) {
        this.width = width;
    }

    /**
     * 
     * @return
     *     The height
     */
    public double getHeight() {
        return height;
    }

    /**
     * 
     * @param height
     *     The height
     */
    public void setHeight(double height) {
        this.height = height;
    }

    /**
     * 
     * @return
     *     The depth
     */
    public double getDepth() {
        return depth;
    }

    /**
     * 
     * @param depth
     *     The depth
     */
    public void setDepth(double depth) {
        this.depth = depth;
    }

    /**
     * 
     * @return
     *     The weight
     */
    public double getWeight() {
        return weight;
    }

    /**
     * 
     * @param weight
     *     The weight
     */
    public void setWeight(double weight) {
        this.weight = weight;
    }

    /**
     * 
     * @return
     *     The descriptionLong
     */
    public String getDescriptionLong() {
        return descriptionLong;
    }

    /**
     * 
     * @param descriptionLong
     *     The description_long
     */
    public void setDescriptionLong(String descriptionLong) {
        this.descriptionLong = descriptionLong;
    }

    /**
     * 
     * @return
     *     The availableNow
     */
    public String getAvailableNow() {
        return availableNow;
    }

    /**
     * 
     * @param availableNow
     *     The available_now
     */
    public void setAvailableNow(String availableNow) {
        this.availableNow = availableNow;
    }

    /**
     * 
     * @return
     *     The availableLater
     */
    public String getAvailableLater() {
        return availableLater;
    }

    /**
     * 
     * @param availableLater
     *     The available_later
     */
    public void setAvailableLater(String availableLater) {
        this.availableLater = availableLater;
    }

    /**
     * 
     * @return
     *     The manufacturerName
     */
    public String getManufacturerName() {
        return manufacturerName;
    }

    /**
     * 
     * @param manufacturerName
     *     The manufacturer_name
     */
    public void setManufacturerName(String manufacturerName) {
        this.manufacturerName = manufacturerName;
    }

    /**
     * 
     * @return
     *     The categoryDefault
     */
    public String getCategoryDefault() {
        return categoryDefault;
    }

    /**
     * 
     * @param categoryDefault
     *     The category_default
     */
    public void setCategoryDefault(String categoryDefault) {
        this.categoryDefault = categoryDefault;
    }

    /**
     * 
     * @return
     *     The nouveau
     */
    public int getNouveau() {
        return nouveau;
    }

    /**
     * 
     * @param nouveau
     *     The nouveau
     */
    public void setNouveau(int nouveau) {
        this.nouveau = nouveau;
    }

    /**
     * 
     * @return
     *     The orderprice
     */
    public double getOrderprice() {
        return orderprice;
    }

    /**
     * 
     * @param orderprice
     *     The orderprice
     */
    public void setOrderprice(double orderprice) {
        this.orderprice = orderprice;
    }



}
