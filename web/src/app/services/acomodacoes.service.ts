import { Injectable } from '@angular/core';
import {HttpClient} from "@angular/common/http";
import {Observable} from "rxjs/Observable";
import {environment} from "../../environments/environment";

@Injectable()
export class AcomodacoesService {

  constructor(public authHttp: HttpClient) {

  }

  latest(page: number, search: string): Observable<any> {
    return this.authHttp
      .get(`${environment.api_url}/acomodacoes?page=${page}&search=${search}&include=`)
      .map(response => response);
  }

  getUrl(page: number): Observable<any> {
    return this.authHttp
      .get(`${environment.api_url}/acomodacoes?page=${page}`)
      .map(response => response);
  }

  get(id: number): Observable<any> {
    return this.authHttp
      .get(`${environment.api_url}/especialistas/${id}&especialistas?include=`)
      .map(response => {
        return response;
      });
  }

  create(atendimento): Promise<Object> {
    return this.authHttp
      .post(`${environment.api_url}/acomodacoes/create`, atendimento)
      .toPromise()
      .then(response => response);
  }

  show(id): Promise<Object> {
    return this.authHttp
      .get(`${environment.api_url}/acomodacoes/${id}`)
      .toPromise()
      .then(response => response);
  }

}
