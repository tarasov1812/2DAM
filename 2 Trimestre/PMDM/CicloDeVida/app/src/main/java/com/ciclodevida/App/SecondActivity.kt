package com.ciclodevida.App

import android.os.Bundle
import android.util.Log
import androidx.appcompat.app.AppCompatActivity
import android.view.View
import com.ciclodevida.R

class SecondActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_second)
        Log.d("Ciclo de vida", "SecondActivity - onCreate")
    }


    override fun onStart() {
        super.onStart()

        Log.d("Ciclo de vida", "SecondActivity - onStart")
        Log.d("Ciclo de vida","secondActivity, onStart de nuevo")
    }

    override fun onResume() {
        super.onResume()
        Log.d("ciclo de vida", "SecondActivity - onResume")
    }

    override fun onPause() {
        super.onPause()
        Log.d("Ciclo de vida", "SecondActivity - onPause")
    }

    override fun onStop() {
        super.onStop()
        Log.d("Lifecycle", "SecondActivity - onStop")
    }

    override fun onRestart() {
        super.onRestart()
        Log.d("Lifecycle", "SecondActivity - onRestart")
    }

    override fun onDestroy() {
        super.onDestroy()
        Log.d("Lifecycle", "SecondActivity - onDestroy")
    }

    fun goBackToMainActivity(view: View) {
        finish()
    }
}
