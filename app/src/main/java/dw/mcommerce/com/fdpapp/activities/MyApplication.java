package dw.mcommerce.com.fdpapp.activities;



import android.app.Application;
import android.database.sqlite.SQLiteDatabase;

import com.ecommerce.db.DaoMaster;
import com.ecommerce.db.DaoMaster.DevOpenHelper;
import com.ecommerce.db.DaoSession;

public class MyApplication extends Application{
	public MyApplication application;
	private static DaoSession daoSession;
	public static final String DB_NAME = "my-db.db";
	
	@Override
	public void onCreate() {
		super.onCreate();
		application = this;
		setupDB();
	}
	
	public MyApplication getApplication() {
		return application;
	}
	
	//return the session of DAO
	public static DaoSession getDaoSession() {
		return daoSession;
	}
	
	//create a DB
	private void setupDB(){
		DevOpenHelper helper = new DaoMaster.DevOpenHelper(this, "my-db.db", null);
		SQLiteDatabase database = helper.getWritableDatabase();
		DaoMaster daoMaster = new DaoMaster(database);
		daoSession =  daoMaster.newSession();
	}

}
