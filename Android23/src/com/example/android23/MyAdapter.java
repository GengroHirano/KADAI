package com.example.android23;

import android.annotation.SuppressLint;
import android.content.Context;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

@SuppressLint("ResourceAsColor")
public class MyAdapter extends ArrayAdapter<String>{

	Context _context ;
	int _textViewResourceId ;
	String[] _data ;
	LayoutInflater _inflater ;

	public MyAdapter(Context context, int textViewResourceId, String[] data) {
		super(context, textViewResourceId, data);
		_context = context ;
		_textViewResourceId = textViewResourceId ;
		_data = data ;

		_inflater = (LayoutInflater)_context.getSystemService(Context.LAYOUT_INFLATER_SERVICE) ;
	}

	@Override
	public View getView(int position, View convertView, ViewGroup parent) {
		View view ;
		if(convertView != null){
			view = convertView ;
		}
		else{
			view = _inflater.inflate(_textViewResourceId, null) ;
			Log.v("初めて作った", "行を作成" + (position + 1) ) ;
		}
		String str = getItem(position);
		TextView text = (TextView)view.findViewById(R.id.text) ;
		text.setText( (position + 1) + ":" + str);
		if( (position % 2) == 0 ){
			text.setTextColor(0xffff0000) ;
		}
		else {
			text.setTextColor(0xff00ff00) ;
		}

		return view ;
	}

}
