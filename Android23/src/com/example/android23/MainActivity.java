package com.example.android23;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.widget.ListView;

public class MainActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		String[] data = {"View", "TextView", "ImageView", "Button", "ImageButton",
				"ProgressBar", "AlertDialog", "ListView", "GridView", "DatePicker"
				,"Actionbar"} ;
		
		ListView list = (ListView)findViewById(R.id.list) ;
//		ArrayAdapter<String> adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, data) ;
		MyAdapter adapter = new MyAdapter(this, R.layout.row, data) ;
		list.setAdapter(adapter) ;
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

}
