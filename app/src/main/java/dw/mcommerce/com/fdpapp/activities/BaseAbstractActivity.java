package dw.mcommerce.com.fdpapp.activities;

import dw.mcommerce.com.fdpapp.service.Restservice;
import roboguice.util.temp.Ln;
import android.os.Bundle;
import android.support.v7.app.ActionBarActivity;
import android.util.Log;


import com.octo.android.robospice.SpiceManager;
import com.octo.android.robospice.SpiceService;

public abstract class BaseAbstractActivity extends ActionBarActivity {

	protected MySpice spiceManager = new MySpice(Restservice.class);

	public SpiceManager getSpiceManager() {
		return spiceManager;
	}

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
	}

class MySpice extends SpiceManager{

	public MySpice(Class<? extends SpiceService> spiceServiceClass) {
		super(spiceServiceClass);
		Ln.getConfig().setLoggingLevel(Log.ERROR);
	}
	
}
}

