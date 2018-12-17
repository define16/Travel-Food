package com.example.user.tabtreval;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class Blog_Activity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_blog);
    }



    public void mainClickTravel(View v)
    {
        Intent intent001 = new Intent(this, Travel_Activity.class);
        startActivity(intent001); //end
    }

    public void mainClickFood(View v)
    {
        Intent intent002 = new Intent(this, Food_Activity.class);
        startActivity(intent002);
    }

    public void mainClickHome(View v)
    {
        Intent intent003 = new Intent(this, Main_Activity.class);
        startActivity(intent003);
    }

    public void mainClickSuggest(View v)
    {
        Intent intent004 = new Intent(this, Suggest_Activity.class);
        startActivity(intent004);
    }

    public void mainClickBlog(View v)
    {
        Intent intent005 = new Intent(this, Blog_Activity.class);
        startActivity(intent005);
    }
}
