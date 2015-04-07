package dw.mcommerce.com.fdpapp.fragments.customer;

import java.util.List;

import android.content.Context;
import android.util.AttributeSet;
import android.view.LayoutInflater;
import android.widget.ImageView;
import android.widget.RelativeLayout;
import android.widget.TextView;

import com.ecommerce.model.Commande;
import com.ecommerce.model.OrderHistory;
import com.squareup.picasso.Picasso;

public class OrderDetailRelativeView extends RelativeLayout {
    public static final int TEXT_SIZE = 12;
    LayoutInflater inflater;
    OrderDetailRelativeView z;

    public OrderDetailRelativeView(Context context, AttributeSet attrs) {
        super(context, attrs);

    }

    public OrderDetailRelativeView(Context context) {
        super(context);

    }

    public OrderDetailRelativeView(Context context, AttributeSet attrs,
                                   int defStyleAttr) {
        super(context, attrs, defStyleAttr);

    }

    public static OrderDetailRelativeView getInstance(Context context) {
        OrderDetailRelativeView detailRelativeView = new OrderDetailRelativeView(
                context, null, 0);
        return detailRelativeView;

    }

    public void initUI(OrderHistory orderHistory) {
        int i = 0;
        List<Commande> c = orderHistory.getCommande();
        for (Commande temp : c) {
            RelativeLayout firstLayout = new RelativeLayout(getContext());
            LayoutParams firstLayoutParams = new LayoutParams(
                    LayoutParams.WRAP_CONTENT,
                    LayoutParams.WRAP_CONTENT);
            firstLayout.setId(1 + i);
            firstLayoutParams.addRule(RelativeLayout.CENTER_HORIZONTAL);
            firstLayoutParams.addRule(RelativeLayout.BELOW,
                    firstLayout.getId() - 1);
            firstLayoutParams.setMargins(0, 20, 0, 0);
            firstLayoutParams.addRule(RelativeLayout.ALIGN_LEFT,
                    firstLayout.getId() - 1);

            firstLayout.setLayoutParams(firstLayoutParams);

            ImageView imageView = new ImageView(getContext());
            Picasso.with(getContext()).load(temp.getImgLink()).into(imageView);
            LayoutParams imageViewParams = new LayoutParams(
                    LayoutParams.WRAP_CONTENT,
                    LayoutParams.WRAP_CONTENT);
            imageView.setId(1);
            imageViewParams.addRule(RelativeLayout.ALIGN_LEFT);
            imageViewParams.addRule(RelativeLayout.ALIGN_TOP);
            imageView.setLayoutParams(imageViewParams);

            TextView title_txt = new TextView(getContext());
            LayoutParams title_txtParams = new LayoutParams(
                    250, LayoutParams.WRAP_CONTENT);
            title_txtParams.addRule(RelativeLayout.RIGHT_OF, imageView.getId());
            title_txtParams.addRule(RelativeLayout.ALIGN_TOP);
            title_txt.setId(8);
            title_txt.setLayoutParams(title_txtParams);
            title_txtParams.setMargins(10, 0, 0, 0);
            title_txt.setTextSize(TEXT_SIZE);
            title_txt.setText(temp.getProductName());

            TextView price_txt = new TextView(getContext());
            LayoutParams price_txtParams = new LayoutParams(
                    LayoutParams.WRAP_CONTENT,
                    LayoutParams.WRAP_CONTENT);
            price_txtParams.addRule(RelativeLayout.RIGHT_OF, title_txt.getId());
            price_txtParams.addRule(RelativeLayout.ALIGN_TOP);
            price_txt.setId(5);
            price_txt.setTextSize(TEXT_SIZE);
            price_txt.setLayoutParams(price_txtParams);
            price_txtParams.setMargins(20, 0, 0, 0);
            price_txt.setText(Double.toString(temp.getProduct_price()
                    .shortValue()));

            TextView quantity_txt = new TextView(getContext());
            LayoutParams quantity_txtParams = new LayoutParams(
                    LayoutParams.WRAP_CONTENT,
                    LayoutParams.WRAP_CONTENT);
            quantity_txtParams.addRule(RelativeLayout.ALIGN_LEFT,
                    title_txt.getId());
            quantity_txtParams.addRule(RelativeLayout.BELOW, title_txt.getId());
            quantity_txt.setId(54);
            quantity_txt.setTextSize(TEXT_SIZE);
            quantity_txt.setLayoutParams(quantity_txtParams);
            quantity_txtParams.setMargins(10, 10, 0, 0);
            quantity_txt.setText("" + temp.getProductQuantity());

            firstLayout.addView(quantity_txt);
            firstLayout.addView(title_txt);
            firstLayout.addView(price_txt);
            firstLayout.addView(imageView);

            addView(firstLayout, firstLayoutParams);
            i++;
        }

    }

    public void setText(int i) {
        TextView textView = new TextView(getContext());
        textView.setId(1 + i);
        LayoutParams layoutParams = new LayoutParams(
                250, LayoutParams.WRAP_CONTENT);
        layoutParams.addRule(RelativeLayout.ALIGN_PARENT_RIGHT);
        layoutParams.addRule(RelativeLayout.BELOW, textView.getId() - 1);
        layoutParams.addRule(RelativeLayout.RIGHT_OF, textView.getId() - 1);
        textView.setLayoutParams(layoutParams);
        textView.setText("libell� 1");
        addView(textView);
    }

    public void addImageView(int i) {
        ImageView imageView = new ImageView(getContext());
        // imageView.setImageDrawable(getResources().getDrawable(R.drawable.play_station_4));
        LayoutParams imageViewParams = new LayoutParams(
                LayoutParams.WRAP_CONTENT,
                LayoutParams.WRAP_CONTENT);
        imageView.setId(1 + i);
        imageViewParams.addRule(RelativeLayout.ALIGN_LEFT);
        imageViewParams.addRule(RelativeLayout.ALIGN_TOP);
        imageView.setLayoutParams(imageViewParams);
        addView(imageView);
    }

}
