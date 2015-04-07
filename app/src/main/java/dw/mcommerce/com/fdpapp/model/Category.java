package dw.mcommerce.com.fdpapp.model;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

import java.util.ArrayList;

import dw.mcommerce.com.fdpapp.R;

public class Category implements Item {

    public static final String ARGS_CATEGORY_ID = "id_category";
    @SerializedName("id_category")
    @Expose
    private int idCategory;
    @Expose
    private String name;


    /**
     * @return The idCategory
     */
    public int getIdCategory() {
        return idCategory;
    }

    /**
     * @param idCategory The id_category
     */
    public void setIdCategory(int idCategory) {
        this.idCategory = idCategory;
    }

    /**
     * @return The name
     */
    public String getName() {
        return name;
    }

    /**
     * @param name The name
     */
    public void setName(String name) {
        this.name = name;
    }

    @Override
    public View getView(LayoutInflater inflator, View convertView, ViewGroup parent, int position) {
        if (convertView == null) {
            convertView = inflator.inflate(R.layout.category_list_children, parent, false);
            TextView textView = (TextView) convertView.findViewById(R.id.libelle_category);
            textView.setText(getName());
        }
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

    @SuppressWarnings("serial")
    public static class List extends ArrayList<Category> {

    }

}
