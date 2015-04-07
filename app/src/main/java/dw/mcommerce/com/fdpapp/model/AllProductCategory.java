package dw.mcommerce.com.fdpapp.model;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.ecommerce.adapter.CustomListAdapter.RowType;
import com.nostra13.universalimageloader.core.DisplayImageOptions;

public class AllProductCategory implements Item{



	@Override
	public int getId(int position) {
		return 0;
	}

	@Override
	public int getViewType() {
		return RowType.CATEGORY_MORE_PRODUCT_LAYOUT.ordinal();
	}

	@Override
	public View getView(LayoutInflater inflator, View convertView,
			ViewGroup parent, int position) {
		// TODO Auto-generated method stub
		return null;
	}



}
