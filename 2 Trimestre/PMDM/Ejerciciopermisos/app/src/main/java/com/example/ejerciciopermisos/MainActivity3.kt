package com.example.ejerciciopermisos

import android.Manifest
import android.content.Context
import android.content.pm.PackageManager
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity
import androidx.core.app.ActivityCompat
import androidx.core.content.ContextCompat
import com.example.permisos.R

class MainActivity3 : AppCompatActivity() {

    private val STORAGE_PERMISSION_REQUEST = 1001
    private lateinit var editTextData: EditText
    private lateinit var btnSave: Button
    private lateinit var tvStoredData: TextView

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main3)

        editTextData = findViewById(R.id.editTextData)
        btnSave = findViewById(R.id.btnSave)
        tvStoredData = findViewById(R.id.tvStoredData)

        checkStoragePermission()

        btnSave.setOnClickListener {
            checkStoragePermissionAndSaveData()
        }

        loadData()
    }

    private fun checkStoragePermission() {
        if (ContextCompat.checkSelfPermission(
                this,
                Manifest.permission.WRITE_EXTERNAL_STORAGE
            ) != PackageManager.PERMISSION_GRANTED
        ) {
            ActivityCompat.requestPermissions(
                this,
                arrayOf(Manifest.permission.WRITE_EXTERNAL_STORAGE),
                STORAGE_PERMISSION_REQUEST
            )
        }
    }

    private fun checkStoragePermissionAndSaveData() {
        if (ContextCompat.checkSelfPermission(
                this,
                Manifest.permission.WRITE_EXTERNAL_STORAGE
            ) == PackageManager.PERMISSION_GRANTED
        ) {
            saveData()
        } else {
            ActivityCompat.requestPermissions(
                this,
                arrayOf(Manifest.permission.WRITE_EXTERNAL_STORAGE),
                STORAGE_PERMISSION_REQUEST
            )
        }
    }

    private fun saveData() {
        val dataToStore = editTextData.text.toString()
        val sharedPreferences = getSharedPreferences("MyPrefs", Context.MODE_PRIVATE)
        val editor = sharedPreferences.edit()
        editor.putString("storedData", dataToStore)
        editor.apply()
        editTextData.text.clear()
        loadData()
    }

    private fun loadData() {
        val sharedPreferences = getSharedPreferences("MyPrefs", Context.MODE_PRIVATE)
        val storedData = sharedPreferences.getString("storedData", "")
        tvStoredData.text = "Datos almacenados: $storedData"
    }

    override fun onRequestPermissionsResult(
        requestCode: Int,
        permissions: Array<out String>,
        grantResults: IntArray
    ) {
        super.onRequestPermissionsResult(requestCode, permissions, grantResults)

        if (requestCode == STORAGE_PERMISSION_REQUEST) {
            if (grantResults.isNotEmpty() && grantResults[0] == PackageManager.PERMISSION_GRANTED) {
                saveData()
            } else {
            }
        }
    }
}