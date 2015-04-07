package dw.mcommerce.com.fdpapp.model;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class Details {
	@SerializedName("id_children_category")
	@Expose
	private int idChildrenCategory;

	/**
	* 
	* @return
	* The idChildrenCategory
	*/
	public int getIdChildrenCategory() {
	return idChildrenCategory;
	}

	/**
	* 
	* @param idChildrenCategory
	* The id_children_category
	*/
	public void setIdChildrenCategory(int idChildrenCategory) {
	this.idChildrenCategory = idChildrenCategory;
	}
}
