package com.example.user.tabtreval;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class Food_Info_Activity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_food_info);
    }

    public void foodInfoClickBlogReview1(View v)
    {
        Intent intent001 = new Intent(this, Blog_Activity.class);
        startActivity(intent001);
    }
}
