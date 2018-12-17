package com.example.user.tabtreval;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;

public class Main_Activity extends AppCompatActivity {
   // ImageView iv1;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

       // iv1 = (ImageView)findViewById(R.id.imageView9);
      // iv1.setImageResource(R.drawable.main_1);
     //  iv1.setOnClickListener(new MyListener());
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
/*
class MyListener  extends AppCompatActivity implements View.OnClickListener
{
    public void onClick(View v)
    {
        Intent intent = new Intent(Intent.ACTION_VIEW, Uri.parse("http://m.naver.com"));
        startActivity(intent);
    }
}*/