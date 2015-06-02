package dw.mcommerce.com.fdpapp.fragments;

import android.support.v4.app.Fragment;

import com.octo.android.robospice.SpiceManager;

import dw.mcommerce.com.fdpapp.service.Restservice;

public class BaseFragment extends Fragment{
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
