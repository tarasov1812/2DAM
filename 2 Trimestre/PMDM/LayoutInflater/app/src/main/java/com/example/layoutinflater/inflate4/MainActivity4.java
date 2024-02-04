package com.example.layoutinflater.inflate4;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.widget.LinearLayout;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

import com.example.layoutinflater.R;

public class MainActivity4 extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        View rootView = LayoutInflater.from(this).inflate(R.layout.activity_main4, null);

        LinearLayout linearLayout = rootView.findViewById(R.id.linearLayoutContainer);


        TextView nuevoTextView = new TextView(this);
        nuevoTextView.setText("Hola, Alexandr");

        linearLayout.addView(nuevoTextView);

        setContentView(rootView);
    }
}