import { Component } from '@angular/core';
import { WpApiPosts } from 'wp-api-angular';
import { WpApiCustom } from 'wp-api-angular';
import 'rxjs/add/operator/toPromise';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';

  constructor(
    private wpApiPosts: WpApiPosts,
    private wpApiCustom: WpApiCustom
  ) {

    const subscription = this.wpApiCustom.getInstance('article')
      .getList()
      .subscribe(value => {
        console.log(value.json());
      });
  }
}
