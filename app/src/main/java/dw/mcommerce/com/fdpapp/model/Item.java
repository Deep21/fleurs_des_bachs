package dw.mcommerce.com.fdpapp.model;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.nostra13.universalimageloader.core.DisplayImageOptions;

public interface Item {
	

	public View getView(LayoutInflater inflator, View convertView, ViewGroup parent, int position);
	public int getId(int position);
	public int getViewType();

}
