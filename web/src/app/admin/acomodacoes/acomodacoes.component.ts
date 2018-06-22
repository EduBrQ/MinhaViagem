import {Component, OnInit} from '@angular/core';
import {AcomodacoesService} from '../../services/acomodacoes.service';
import {FormControl} from '@angular/forms';


@Component({
  selector: 'app-acomodacoes',
  templateUrl: './acomodacoes.component.html',
  styleUrls: ['./acomodacoes.component.css']
})
export class AcomodacoesComponent implements OnInit {

  acomodacoes: any;
  total: number;
  per_page: number;
  page = 1;
  search = '';

  getAcomodacoes() {
    return this.acomodacoesService.latest(this.page, this.search);
  }

  constructor(public acomodacoesService: AcomodacoesService) {
    this.getAcomodacoes()
      .subscribe((acomodacoes) => {
        this.acomodacoes = acomodacoes.data;
        this.total = acomodacoes.total;
        this.per_page = acomodacoes.per_page;
        // this.page = this.acomodacoes.current_page;

        console.log(this.total / this.per_page);

      });
  }


  messages: string[] = [];

  gatherCount(message) {
    this.messages.push(message);
  }

  gatherPage(pageNo) {
    console.log(pageNo);
  }

  ngOnInit() {

  }

  paginar(event: any) {
    console.log(event);
  }

}
