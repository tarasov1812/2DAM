package com.enero.retotrabajos

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView

class TrabajoAdapter(private val courses: List<Trabajo>, private val onCourseClickListener: (Trabajo) -> Unit) :
    RecyclerView.Adapter<TrabajoAdapter.ViewHolder>() {

    class ViewHolder(itemView: View) : RecyclerView.ViewHolder(itemView)

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.activity_item_course, parent, false)
        return ViewHolder(view)
    }

    override fun onBindViewHolder(holder: ViewHolder, position: Int) {
        val course = courses[position]
        val courseTextView: TextView = holder.itemView.findViewById(R.id.trabajoNameTextView)
        courseTextView.text = course.name
        holder.itemView.setOnClickListener { onCourseClickListener(course) }
    }
    override fun getItemCount(): Int = courses.size
}
