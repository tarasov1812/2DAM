package com.example.layoutinflater.inflate3;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

import com.example.layoutinflater.R;

public class ContainerActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        View rootView = LayoutInflater.from(this).inflate(R.layout.activity_container, null);
        setContentView(rootView);

        TextView tvContainerText = findViewById(R.id.tvContainerText);

        String message = getIntent().getStringExtra("message");

        tvContainerText.setText(message);
    }
}
