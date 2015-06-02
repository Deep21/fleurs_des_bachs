package dw.mcommerce.com.fdpapp.model;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import com.squareup.picasso.Picasso;

import dw.mcommerce.com.fdpapp.R;

public class CustomerHomeMenu implements Item {
	private int img;
	private String title;
	private String title_description;
	
	public int getImg() {
		return img;
	}
	public void setImg(int img) {
		this.img = img;
	}
	public String getTitle() {
		return title;
	}
	public void setTitle(String title) {
		this.title = title;
	}
	public String getTitle_description() {
		return title_description;
	}
	public void setTitle_description(String title_description) {
		this.title_description = title_description;
	}
	@Override
	public View getView(LayoutInflater inflator, View convertView, ViewGroup parent, int position) {
		ViewHolder holder;
		if (convertView == null) {
			holder = new ViewHolder();
			convertView = inflator.inflate(R.layout.customer_home_layout, parent, false);
			holder.title = (TextView) convertView.findViewById(R.id.title);
			holder.title_description = (TextView) convertView.findViewById(R.id.title_desciption);
			holder.img_icone = (ImageView) convertView.findViewById(R.id.img_icone);

			convertView.setTag(holder);
		} else {
			holder = (ViewHolder) convertView.getTag();
		}
		if (this != null) {
			Picasso.with(parent.getContext()).load(getImg()).into(holder.img_icone);
			holder.title.setText(getTitle());
			holder.title_description.setText(getTitle_description());

		}

		return convertView;

	}

	static class ViewHolder {
		ImageView img_icone;
		TextView title;
		TextView title_description;

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
