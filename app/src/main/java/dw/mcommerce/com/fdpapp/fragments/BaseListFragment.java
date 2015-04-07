package dw.mcommerce.com.fdpapp.fragments;

import android.support.v4.app.ListFragment;

import com.ecommerce.android.service.Restservice;
import com.octo.android.robospice.SpiceManager;

public class BaseListFragment extends ListFragment{
	protected SpiceManager spiceManager = new SpiceManager(Restservice.class);
	
	public SpiceManager getSpiceManager() {
		return spiceManager;
	}
	
	@Override
	public void onStart() {
		super.onStart();
		spiceManager.start(getActivity());
	
	}

	
	@Override
	public void onStop() {
		if (spiceManager.isStarted()) {
			spiceManager.shouldStop();
		}
		super.onStop();
	}
}
