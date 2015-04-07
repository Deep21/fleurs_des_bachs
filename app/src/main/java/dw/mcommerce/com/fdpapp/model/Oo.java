package dw.mcommerce.com.fdpapp.model;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

import org.apache.commons.lang3.builder.EqualsBuilder;
import org.apache.commons.lang3.builder.HashCodeBuilder;
import org.apache.commons.lang3.builder.ToStringBuilder;

public class Oo {
    @SerializedName("id_address_delivery")
    @Expose
    private int idAddressDelivery;
    @SerializedName("id_address_invoice")
    @Expose
    private int idAddressInvoice;
    @SerializedName("id_cart")
    @Expose
    private int idCart;
    @SerializedName("id_currency")
    @Expose
    private int idCurrency;
    @SerializedName("id_shop_group")
    @Expose
    private int idShopGroup;
    @SerializedName("id_shop")
    @Expose
    private int idShop;
    @SerializedName("id_lang")
    @Expose
    private int idLang;
    @SerializedName("id_customer")
    @Expose
    private int idCustomer;
    @SerializedName("id_carrier")
    @Expose
    private int idCarrier;
    @SerializedName("current_state")
    @Expose
    private int currentState;
    @SerializedName("secure_key")
    @Expose
    private String secureKey;
    @Expose
    private String payment;
    @Expose
    private String module;
    @Expose
    private boolean recyclable;
    @Expose
    private boolean gift;
    @SerializedName("gift_message")
    @Expose
    private String giftMessage;
    @SerializedName("mobile_theme")
    @Expose
    private boolean mobileTheme;
    @SerializedName("total_discounts")
    @Expose
    private float totalDiscounts;
    @SerializedName("total_discounts_tax_incl")
    @Expose
    private float totalDiscountsTaxIncl;
    @SerializedName("total_discounts_tax_excl")
    @Expose
    private float totalDiscountsTaxExcl;
    @SerializedName("total_paid")
    @Expose
    private float totalPaid;
    @SerializedName("total_paid_tax_incl")
    @Expose
    private float totalPaidTaxIncl;
    @SerializedName("total_paid_tax_excl")
    @Expose
    private float totalPaidTaxExcl;
    @SerializedName("total_paid_real")
    @Expose
    private float totalPaidReal;
    @SerializedName("total_products")
    @Expose
    private float totalProducts;
    @SerializedName("total_products_wt")
    @Expose
    private float totalProductsWt;
    @SerializedName("total_shipping")
    @Expose
    private float totalShipping;
    @SerializedName("total_shipping_tax_incl")
    @Expose
    private float totalShippingTaxIncl;
    @SerializedName("total_shipping_tax_excl")
    @Expose
    private float totalShippingTaxExcl;
    @SerializedName("carrier_tax_rate")
    @Expose
    private float carrierTaxRate;
    @SerializedName("total_wrapping")
    @Expose
    private float totalWrapping;
    @SerializedName("total_wrapping_tax_incl")
    @Expose
    private float totalWrappingTaxIncl;
    @SerializedName("total_wrapping_tax_excl")
    @Expose
    private float totalWrappingTaxExcl;
    @SerializedName("shipping_number")
    @Expose
    private String shippingNumber;
    @SerializedName("conversion_rate")
    @Expose
    private float conversionRate;
    @SerializedName("invoice_number")
    @Expose
    private int invoiceNumber;
    @SerializedName("delivery_number")
    @Expose
    private int deliveryNumber;
    @SerializedName("invoice_date")
    @Expose
    private String invoiceDate;
    @SerializedName("delivery_date")
    @Expose
    private String deliveryDate;
    @Expose
    private boolean valid;
    @Expose
    private String reference;
    @SerializedName("date_add")
    @Expose
    private String dateAdd;
    @SerializedName("date_upd")
    @Expose
    private String dateUpd;

    /**
     * @return The idAddressDelivery
     */
    public int getIdAddressDelivery() {
        return idAddressDelivery;
    }

    /**
     * @param idAddressDelivery The id_address_delivery
     */
    public void setIdAddressDelivery(int idAddressDelivery) {
        this.idAddressDelivery = idAddressDelivery;
    }

    /**
     * @return The idAddressInvoice
     */
    public int getIdAddressInvoice() {
        return idAddressInvoice;
    }

    /**
     * @param idAddressInvoice The id_address_invoice
     */
    public void setIdAddressInvoice(int idAddressInvoice) {
        this.idAddressInvoice = idAddressInvoice;
    }

    /**
     * @return The idCart
     */
    public int getIdCart() {
        return idCart;
    }

    /**
     * @param idCart The id_cart
     */
    public void setIdCart(int idCart) {
        this.idCart = idCart;
    }

    /**
     * @return The idCurrency
     */
    public int getIdCurrency() {
        return idCurrency;
    }

    /**
     * @param idCurrency The id_currency
     */
    public void setIdCurrency(int idCurrency) {
        this.idCurrency = idCurrency;
    }

    /**
     * @return The idShopGroup
     */
    public int getIdShopGroup() {
        return idShopGroup;
    }

    /**
     * @param idShopGroup The id_shop_group
     */
    public void setIdShopGroup(int idShopGroup) {
        this.idShopGroup = idShopGroup;
    }

    /**
     * @return The idShop
     */
    public int getIdShop() {
        return idShop;
    }

    /**
     * @param idShop The id_shop
     */
    public void setIdShop(int idShop) {
        this.idShop = idShop;
    }

    /**
     * @return The idLang
     */
    public int getIdLang() {
        return idLang;
    }

    /**
     * @param idLang The id_lang
     */
    public void setIdLang(int idLang) {
        this.idLang = idLang;
    }

    /**
     * @return The idCustomer
     */
    public int getIdCustomer() {
        return idCustomer;
    }

    /**
     * @param idCustomer The id_customer
     */
    public void setIdCustomer(int idCustomer) {
        this.idCustomer = idCustomer;
    }

    /**
     * @return The idCarrier
     */
    public int getIdCarrier() {
        return idCarrier;
    }

    /**
     * @param idCarrier The id_carrier
     */
    public void setIdCarrier(int idCarrier) {
        this.idCarrier = idCarrier;
    }

    /**
     * @return The currentState
     */
    public int getCurrentState() {
        return currentState;
    }

    /**
     * @param currentState The current_state
     */
    public void setCurrentState(int currentState) {
        this.currentState = currentState;
    }

    /**
     * @return The secureKey
     */
    public String getSecureKey() {
        return secureKey;
    }

    /**
     * @param secureKey The secure_key
     */
    public void setSecureKey(String secureKey) {
        this.secureKey = secureKey;
    }

    /**
     * @return The payment
     */
    public String getPayment() {
        return payment;
    }

    /**
     * @param payment The payment
     */
    public void setPayment(String payment) {
        this.payment = payment;
    }

    /**
     * @return The module
     */
    public String getModule() {
        return module;
    }

    /**
     * @param module The module
     */
    public void setModule(String module) {
        this.module = module;
    }

    /**
     * @return The recyclable
     */
    public boolean isRecyclable() {
        return recyclable;
    }

    /**
     * @param recyclable The recyclable
     */
    public void setRecyclable(boolean recyclable) {
        this.recyclable = recyclable;
    }

    /**
     * @return The gift
     */
    public boolean isGift() {
        return gift;
    }

    /**
     * @param gift The gift
     */
    public void setGift(boolean gift) {
        this.gift = gift;
    }

    /**
     * @return The giftMessage
     */
    public String getGiftMessage() {
        return giftMessage;
    }

    /**
     * @param giftMessage The gift_message
     */
    public void setGiftMessage(String giftMessage) {
        this.giftMessage = giftMessage;
    }

    /**
     * @return The mobileTheme
     */
    public boolean isMobileTheme() {
        return mobileTheme;
    }

    /**
     * @param mobileTheme The mobile_theme
     */
    public void setMobileTheme(boolean mobileTheme) {
        this.mobileTheme = mobileTheme;
    }

    /**
     * @return The totalDiscounts
     */
    public float getTotalDiscounts() {
        return totalDiscounts;
    }

    /**
     * @param totalDiscounts The total_discounts
     */
    public void setTotalDiscounts(float totalDiscounts) {
        this.totalDiscounts = totalDiscounts;
    }

    /**
     * @return The totalDiscountsTaxIncl
     */
    public float getTotalDiscountsTaxIncl() {
        return totalDiscountsTaxIncl;
    }

    /**
     * @param totalDiscountsTaxIncl The total_discounts_tax_incl
     */
    public void setTotalDiscountsTaxIncl(float totalDiscountsTaxIncl) {
        this.totalDiscountsTaxIncl = totalDiscountsTaxIncl;
    }

    /**
     * @return The totalDiscountsTaxExcl
     */
    public float getTotalDiscountsTaxExcl() {
        return totalDiscountsTaxExcl;
    }

    /**
     * @param totalDiscountsTaxExcl The total_discounts_tax_excl
     */
    public void setTotalDiscountsTaxExcl(float totalDiscountsTaxExcl) {
        this.totalDiscountsTaxExcl = totalDiscountsTaxExcl;
    }

    /**
     * @return The totalPaid
     */
    public float getTotalPaid() {
        return totalPaid;
    }

    /**
     * @param totalPaid The total_paid
     */
    public void setTotalPaid(float totalPaid) {
        this.totalPaid = totalPaid;
    }

    /**
     * @return The totalPaidTaxIncl
     */
    public float getTotalPaidTaxIncl() {
        return totalPaidTaxIncl;
    }

    /**
     * @param totalPaidTaxIncl The total_paid_tax_incl
     */
    public void setTotalPaidTaxIncl(float totalPaidTaxIncl) {
        this.totalPaidTaxIncl = totalPaidTaxIncl;
    }

    /**
     * @return The totalPaidTaxExcl
     */
    public float getTotalPaidTaxExcl() {
        return totalPaidTaxExcl;
    }

    /**
     * @param totalPaidTaxExcl The total_paid_tax_excl
     */
    public void setTotalPaidTaxExcl(float totalPaidTaxExcl) {
        this.totalPaidTaxExcl = totalPaidTaxExcl;
    }

    /**
     * @return The totalPaidReal
     */
    public float getTotalPaidReal() {
        return totalPaidReal;
    }

    /**
     * @param totalPaidReal The total_paid_real
     */
    public void setTotalPaidReal(float totalPaidReal) {
        this.totalPaidReal = totalPaidReal;
    }

    /**
     * @return The totalProducts
     */
    public float getTotalProducts() {
        return totalProducts;
    }

    /**
     * @param totalProducts The total_products
     */
    public void setTotalProducts(float totalProducts) {
        this.totalProducts = totalProducts;
    }

    /**
     * @return The totalProductsWt
     */
    public float getTotalProductsWt() {
        return totalProductsWt;
    }

    /**
     * @param totalProductsWt The total_products_wt
     */
    public void setTotalProductsWt(float totalProductsWt) {
        this.totalProductsWt = totalProductsWt;
    }

    /**
     * @return The totalShipping
     */
    public float getTotalShipping() {
        return totalShipping;
    }

    /**
     * @param totalShipping The total_shipping
     */
    public void setTotalShipping(float totalShipping) {
        this.totalShipping = totalShipping;
    }

    /**
     * @return The totalShippingTaxIncl
     */
    public float getTotalShippingTaxIncl() {
        return totalShippingTaxIncl;
    }

    /**
     * @param totalShippingTaxIncl The total_shipping_tax_incl
     */
    public void setTotalShippingTaxIncl(float totalShippingTaxIncl) {
        this.totalShippingTaxIncl = totalShippingTaxIncl;
    }

    /**
     * @return The totalShippingTaxExcl
     */
    public float getTotalShippingTaxExcl() {
        return totalShippingTaxExcl;
    }

    /**
     * @param totalShippingTaxExcl The total_shipping_tax_excl
     */
    public void setTotalShippingTaxExcl(float totalShippingTaxExcl) {
        this.totalShippingTaxExcl = totalShippingTaxExcl;
    }

    /**
     * @return The carrierTaxRate
     */
    public float getCarrierTaxRate() {
        return carrierTaxRate;
    }

    /**
     * @param carrierTaxRate The carrier_tax_rate
     */
    public void setCarrierTaxRate(float carrierTaxRate) {
        this.carrierTaxRate = carrierTaxRate;
    }

    /**
     * @return The totalWrapping
     */
    public float getTotalWrapping() {
        return totalWrapping;
    }

    /**
     * @param totalWrapping The total_wrapping
     */
    public void setTotalWrapping(float totalWrapping) {
        this.totalWrapping = totalWrapping;
    }

    /**
     * @return The totalWrappingTaxIncl
     */
    public float getTotalWrappingTaxIncl() {
        return totalWrappingTaxIncl;
    }

    /**
     * @param totalWrappingTaxIncl The total_wrapping_tax_incl
     */
    public void setTotalWrappingTaxIncl(float totalWrappingTaxIncl) {
        this.totalWrappingTaxIncl = totalWrappingTaxIncl;
    }

    /**
     * @return The totalWrappingTaxExcl
     */
    public float getTotalWrappingTaxExcl() {
        return totalWrappingTaxExcl;
    }

    /**
     * @param totalWrappingTaxExcl The total_wrapping_tax_excl
     */
    public void setTotalWrappingTaxExcl(float totalWrappingTaxExcl) {
        this.totalWrappingTaxExcl = totalWrappingTaxExcl;
    }

    /**
     * @return The shippingNumber
     */
    public String getShippingNumber() {
        return shippingNumber;
    }

    /**
     * @param shippingNumber The shipping_number
     */
    public void setShippingNumber(String shippingNumber) {
        this.shippingNumber = shippingNumber;
    }

    /**
     * @return The conversionRate
     */
    public float getConversionRate() {
        return conversionRate;
    }

    /**
     * @param conversionRate The conversion_rate
     */
    public void setConversionRate(float conversionRate) {
        this.conversionRate = conversionRate;
    }

    /**
     * @return The invoiceNumber
     */
    public int getInvoiceNumber() {
        return invoiceNumber;
    }

    /**
     * @param invoiceNumber The invoice_number
     */
    public void setInvoiceNumber(int invoiceNumber) {
        this.invoiceNumber = invoiceNumber;
    }

    /**
     * @return The deliveryNumber
     */
    public int getDeliveryNumber() {
        return deliveryNumber;
    }

    /**
     * @param deliveryNumber The delivery_number
     */
    public void setDeliveryNumber(int deliveryNumber) {
        this.deliveryNumber = deliveryNumber;
    }

    /**
     * @return The invoiceDate
     */
    public String getInvoiceDate() {
        return invoiceDate;
    }

    /**
     * @param invoiceDate The invoice_date
     */
    public void setInvoiceDate(String invoiceDate) {
        this.invoiceDate = invoiceDate;
    }

    /**
     * @return The deliveryDate
     */
    public String getDeliveryDate() {
        return deliveryDate;
    }

    /**
     * @param deliveryDate The delivery_date
     */
    public void setDeliveryDate(String deliveryDate) {
        this.deliveryDate = deliveryDate;
    }

    /**
     * @return The valid
     */
    public boolean isValid() {
        return valid;
    }

    /**
     * @param valid The valid
     */
    public void setValid(boolean valid) {
        this.valid = valid;
    }

    /**
     * @return The reference
     */
    public String getReference() {
        return reference;
    }

    /**
     * @param reference The reference
     */
    public void setReference(String reference) {
        this.reference = reference;
    }

    /**
     * @return The dateAdd
     */
    public String getDateAdd() {
        return dateAdd;
    }

    /**
     * @param dateAdd The date_add
     */
    public void setDateAdd(String dateAdd) {
        this.dateAdd = dateAdd;
    }

    /**
     * @return The dateUpd
     */
    public String getDateUpd() {
        return dateUpd;
    }

    /**
     * @param dateUpd The date_upd
     */
    public void setDateUpd(String dateUpd) {
        this.dateUpd = dateUpd;
    }

    @Override
    public String toString() {
        return ToStringBuilder.reflectionToString(this);
    }

    @Override
    public int hashCode() {
        return new HashCodeBuilder().append(idAddressDelivery)
                .append(idAddressInvoice).append(idCart).append(idCurrency)
                .append(idShopGroup).append(idShop).append(idLang)
                .append(idCustomer).append(idCarrier).append(currentState)
                .append(secureKey).append(payment).append(module)
                .append(recyclable).append(gift).append(giftMessage)
                .append(mobileTheme).append(totalDiscounts)
                .append(totalDiscountsTaxIncl).append(totalDiscountsTaxExcl)
                .append(totalPaid).append(totalPaidTaxIncl)
                .append(totalPaidTaxExcl).append(totalPaidReal)
                .append(totalProducts).append(totalProductsWt)
                .append(totalShipping).append(totalShippingTaxIncl)
                .append(totalShippingTaxExcl).append(carrierTaxRate)
                .append(totalWrapping).append(totalWrappingTaxIncl)
                .append(totalWrappingTaxExcl).append(shippingNumber)
                .append(conversionRate).append(invoiceNumber)
                .append(deliveryNumber).append(invoiceDate)
                .append(deliveryDate).append(valid).append(reference)
                .append(dateAdd).append(dateUpd).toHashCode();
    }

    @Override
    public boolean equals(Object other) {
        if (other == this) {
            return true;
        }
        if ((other instanceof Oo) == false) {
            return false;
        }
        Oo rhs = ((Oo) other);
        return new EqualsBuilder()
                .append(idAddressDelivery, rhs.idAddressDelivery)
                .append(idAddressInvoice, rhs.idAddressInvoice)
                .append(idCart, rhs.idCart).append(idCurrency, rhs.idCurrency)
                .append(idShopGroup, rhs.idShopGroup)
                .append(idShop, rhs.idShop).append(idLang, rhs.idLang)
                .append(idCustomer, rhs.idCustomer)
                .append(idCarrier, rhs.idCarrier)
                .append(currentState, rhs.currentState)
                .append(secureKey, rhs.secureKey).append(payment, rhs.payment)
                .append(module, rhs.module).append(recyclable, rhs.recyclable)
                .append(gift, rhs.gift).append(giftMessage, rhs.giftMessage)
                .append(mobileTheme, rhs.mobileTheme)
                .append(totalDiscounts, rhs.totalDiscounts)
                .append(totalDiscountsTaxIncl, rhs.totalDiscountsTaxIncl)
                .append(totalDiscountsTaxExcl, rhs.totalDiscountsTaxExcl)
                .append(totalPaid, rhs.totalPaid)
                .append(totalPaidTaxIncl, rhs.totalPaidTaxIncl)
                .append(totalPaidTaxExcl, rhs.totalPaidTaxExcl)
                .append(totalPaidReal, rhs.totalPaidReal)
                .append(totalProducts, rhs.totalProducts)
                .append(totalProductsWt, rhs.totalProductsWt)
                .append(totalShipping, rhs.totalShipping)
                .append(totalShippingTaxIncl, rhs.totalShippingTaxIncl)
                .append(totalShippingTaxExcl, rhs.totalShippingTaxExcl)
                .append(carrierTaxRate, rhs.carrierTaxRate)
                .append(totalWrapping, rhs.totalWrapping)
                .append(totalWrappingTaxIncl, rhs.totalWrappingTaxIncl)
                .append(totalWrappingTaxExcl, rhs.totalWrappingTaxExcl)
                .append(shippingNumber, rhs.shippingNumber)
                .append(conversionRate, rhs.conversionRate)
                .append(invoiceNumber, rhs.invoiceNumber)
                .append(deliveryNumber, rhs.deliveryNumber)
                .append(invoiceDate, rhs.invoiceDate)
                .append(deliveryDate, rhs.deliveryDate)
                .append(valid, rhs.valid).append(reference, rhs.reference)
                .append(dateAdd, rhs.dateAdd).append(dateUpd, rhs.dateUpd)
                .isEquals();
    }
}
