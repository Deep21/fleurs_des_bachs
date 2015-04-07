package dw.mcommerce.com.fdpapp.model;

import java.util.ArrayList;
import java.util.List;

import org.apache.commons.lang3.builder.EqualsBuilder;
import org.apache.commons.lang3.builder.HashCodeBuilder;
import org.apache.commons.lang3.builder.ToStringBuilder;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

import dw.mcommerce.com.fdpapp.R;

public class OrderHistory implements Item {

	@Expose
	@SerializedName("id_order")
	private int idOrder;
	@Expose
	@SerializedName("reference")
	private String reference;
	@Expose
	private String payment;
	@SerializedName("total_paid")
	@Expose
	private double totalPaid;
	@SerializedName("total_paid_tax_excl")
	@Expose
	private double totalPaidTaxExcl;
	@Expose
	private double tva;
	@SerializedName("total_shipping")
	@Expose
	private double totalShipping;
	@SerializedName("order_date")
	@Expose
	private String orderDate;
	@SerializedName("order_state")
	@Expose
	private List<OrderState> orderState = new ArrayList<OrderState>();
	@Expose
	private Adress adress;
	@Expose
	private List<Commande> commande = new ArrayList<Commande>();

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
	 * @return The totalPaid
	 */
	public double getTotalPaid() {
		return totalPaid;
	}

	/**
	 * 
	 * @param totalPaid
	 *            The total_paid
	 */
	public void setTotalPaid(double totalPaid) {
		this.totalPaid = totalPaid;
	}

	/**
	 * 
	 * @return The totalPaidTaxExcl
	 */
	public double getTotalPaidTaxExcl() {
		return totalPaidTaxExcl;
	}

	/**
	 * 
	 * @param totalPaidTaxExcl
	 *            The total_paid_tax_excl
	 */
	public void setTotalPaidTaxExcl(double totalPaidTaxExcl) {
		this.totalPaidTaxExcl = totalPaidTaxExcl;
	}

	/**
	 * 
	 * @return The tva
	 */
	public double getTva() {
		return tva;
	}

	/**
	 * 
	 * @param tva
	 *            The tva
	 */
	public void setTva(double tva) {
		this.tva = tva;
	}

	/**
	 * 
	 * @return The totalShipping
	 */
	public double getTotalShipping() {
		return totalShipping;
	}

	/**
	 * 
	 * @param totalShipping
	 *            The total_shipping
	 */
	public void setTotalShipping(double totalShipping) {
		this.totalShipping = totalShipping;
	}

	/**
	 * 
	 * @return The orderDate
	 */
	public String getOrderDate() {
		return orderDate;
	}

	/**
	 * 
	 * @param orderDate
	 *            The order_date
	 */
	public void setOrderDate(String orderDate) {
		this.orderDate = orderDate;
	}

	/**
	 * 
	 * @return The orderState
	 */
	public List<OrderState> getOrderState() {
		return orderState;
	}

	/**
	 * 
	 * @param orderState
	 *            The order_state
	 */
	public void setOrderState(List<OrderState> orderState) {
		this.orderState = orderState;
	}

	/**
	 * 
	 * @return The adress
	 */
	public Adress getAdress() {
		return adress;
	}

	/**
	 * 
	 * @param adress
	 *            The adress
	 */
	public void setAdress(Adress adress) {
		this.adress = adress;
	}

	/**
	 * 
	 * @return The commande
	 */
	public List<Commande> getCommande() {
		return commande;
	}

	public String getPayment() {
		return payment;
	}

	public void setPayment(String payment) {
		this.payment = payment;
	}

	/**
	 * 
	 * @param commande
	 *            The commande
	 */

	public int getIdOrder() {
		return idOrder;
	}

	public void setIdOrder(int idOrder) {
		this.idOrder = idOrder;
	}

	public void setCommande(List<Commande> commande) {
		this.commande = commande;
	}

	@Override
	public String toString() {
		return ToStringBuilder.reflectionToString(this);
	}

	@Override
	public int hashCode() {
		return new HashCodeBuilder().append(reference).append(totalPaid)
				.append(totalPaidTaxExcl).append(tva).append(totalShipping)
				.append(orderDate).append(orderState).append(adress)
				.append(commande).toHashCode();
	}

	@Override
	public boolean equals(Object other) {
		if (other == this) {
			return true;
		}
		if ((other instanceof OrderHistory) == false) {
			return false;
		}
		OrderHistory rhs = ((OrderHistory) other);
		return new EqualsBuilder().append(reference, rhs.reference)
				.append(totalPaid, rhs.totalPaid)
				.append(totalPaidTaxExcl, rhs.totalPaidTaxExcl)
				.append(tva, rhs.tva).append(totalShipping, rhs.totalShipping)
				.append(orderDate, rhs.orderDate)
				.append(orderState, rhs.orderState).append(adress, rhs.adress)
				.append(commande, rhs.commande).isEquals();
	}

	public static class OrderList extends ArrayList<OrderHistory> {

		/**
		 * 
		 */
		private static final long serialVersionUID = 1L;

	}

	@Override
	public View getView(LayoutInflater inflator, View convertView, ViewGroup parent, int position) {
		ViewHolder holder;
		if (convertView == null) {
			holder = new ViewHolder();
			convertView = inflator.inflate(R.layout.order_fragment, parent, false);
			holder.state_order = (TextView) convertView.findViewById(R.id.state_order);
			holder.ref = (TextView) convertView.findViewById(R.id.ref);
			holder.paiment = (TextView) convertView.findViewById(R.id.paiment);
			holder.total_ttc = (TextView) convertView.findViewById(R.id.total_ttc);
			holder.date_achat = (TextView) convertView.findViewById(R.id.date_achat);
			convertView.setTag(holder);
		} else {
			holder = (ViewHolder) convertView.getTag();
		}
		if (this != null) {
			holder.ref.setText(getReference());
			holder.paiment.setText(getPayment());
			holder.total_ttc.setText("" + getTotalPaid());
			holder.date_achat.setText(getOrderDate());
			// holder.state_order.setText(getN());
		}

		return convertView;

	}

	static class ViewHolder {
		TextView state_order;
		TextView ref;
		TextView paiment;
		TextView total_ttc;
		TextView date_achat;

	}

	@Override
	public int getId(int position) {
		return 0;
	}

	@Override
	public int getViewType() {
		return 0;
	}

}
