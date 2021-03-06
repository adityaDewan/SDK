/*
 * Hydrogen Proton API
 * Financial engineering module of Hydrogen Atom
 *
 * OpenAPI spec version: 1.7.18
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.proton.model;

import java.util.Objects;

import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModelProperty;

import java.util.UUID;
import org.threeten.bp.LocalDate;

/**
 * CashFlowAnalysisRequest
 */
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-05-29T05:03:35.524Z")
public class CashFlowAnalysisRequest {
  @SerializedName("show_history")
  private Boolean showHistory = false;

  @SerializedName("start_date")
  private LocalDate startDate = null;

  @SerializedName("end_date")
  private LocalDate endDate = null;

  @SerializedName("client_id")
  private UUID clientId = null;

  @SerializedName("currency_code")
  private String currencyCode = "USD";

  @SerializedName("show_income_details")
  private Boolean showIncomeDetails = false;

  @SerializedName("benchmark_end_date")
  private LocalDate benchmarkEndDate = null;

  @SerializedName("show_spending_details")
  private Boolean showSpendingDetails = false;

  @SerializedName("benchmark_start_date")
  private LocalDate benchmarkStartDate = null;

  public CashFlowAnalysisRequest showHistory(Boolean showHistory) {
    this.showHistory = showHistory;
    return this;
  }

   /**
   * Get showHistory
   * @return showHistory
  **/
  @ApiModelProperty(value = "")
  public Boolean isShowHistory() {
    return showHistory;
  }

  public void setShowHistory(Boolean showHistory) {
    this.showHistory = showHistory;
  }

  public CashFlowAnalysisRequest startDate(LocalDate startDate) {
    this.startDate = startDate;
    return this;
  }

   /**
   * Get startDate
   * @return startDate
  **/
  @ApiModelProperty(value = "")
  public LocalDate getStartDate() {
    return startDate;
  }

  public void setStartDate(LocalDate startDate) {
    this.startDate = startDate;
  }

  public CashFlowAnalysisRequest endDate(LocalDate endDate) {
    this.endDate = endDate;
    return this;
  }

   /**
   * Get endDate
   * @return endDate
  **/
  @ApiModelProperty(value = "")
  public LocalDate getEndDate() {
    return endDate;
  }

  public void setEndDate(LocalDate endDate) {
    this.endDate = endDate;
  }

  public CashFlowAnalysisRequest clientId(UUID clientId) {
    this.clientId = clientId;
    return this;
  }

   /**
   * Get clientId
   * @return clientId
  **/
  @ApiModelProperty(required = true, value = "")
  public UUID getClientId() {
    return clientId;
  }

  public void setClientId(UUID clientId) {
    this.clientId = clientId;
  }

  public CashFlowAnalysisRequest currencyCode(String currencyCode) {
    this.currencyCode = currencyCode;
    return this;
  }

   /**
   * Get currencyCode
   * @return currencyCode
  **/
  @ApiModelProperty(value = "")
  public String getCurrencyCode() {
    return currencyCode;
  }

  public void setCurrencyCode(String currencyCode) {
    this.currencyCode = currencyCode;
  }

  public CashFlowAnalysisRequest showIncomeDetails(Boolean showIncomeDetails) {
    this.showIncomeDetails = showIncomeDetails;
    return this;
  }

   /**
   * Get showIncomeDetails
   * @return showIncomeDetails
  **/
  @ApiModelProperty(value = "")
  public Boolean isShowIncomeDetails() {
    return showIncomeDetails;
  }

  public void setShowIncomeDetails(Boolean showIncomeDetails) {
    this.showIncomeDetails = showIncomeDetails;
  }

  public CashFlowAnalysisRequest benchmarkEndDate(LocalDate benchmarkEndDate) {
    this.benchmarkEndDate = benchmarkEndDate;
    return this;
  }

   /**
   * Get benchmarkEndDate
   * @return benchmarkEndDate
  **/
  @ApiModelProperty(value = "")
  public LocalDate getBenchmarkEndDate() {
    return benchmarkEndDate;
  }

  public void setBenchmarkEndDate(LocalDate benchmarkEndDate) {
    this.benchmarkEndDate = benchmarkEndDate;
  }

  public CashFlowAnalysisRequest showSpendingDetails(Boolean showSpendingDetails) {
    this.showSpendingDetails = showSpendingDetails;
    return this;
  }

   /**
   * Get showSpendingDetails
   * @return showSpendingDetails
  **/
  @ApiModelProperty(value = "")
  public Boolean isShowSpendingDetails() {
    return showSpendingDetails;
  }

  public void setShowSpendingDetails(Boolean showSpendingDetails) {
    this.showSpendingDetails = showSpendingDetails;
  }

  public CashFlowAnalysisRequest benchmarkStartDate(LocalDate benchmarkStartDate) {
    this.benchmarkStartDate = benchmarkStartDate;
    return this;
  }

   /**
   * Get benchmarkStartDate
   * @return benchmarkStartDate
  **/
  @ApiModelProperty(value = "")
  public LocalDate getBenchmarkStartDate() {
    return benchmarkStartDate;
  }

  public void setBenchmarkStartDate(LocalDate benchmarkStartDate) {
    this.benchmarkStartDate = benchmarkStartDate;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    CashFlowAnalysisRequest cashFlowAnalysisRequest = (CashFlowAnalysisRequest) o;
    return Objects.equals(this.showHistory, cashFlowAnalysisRequest.showHistory) &&
        Objects.equals(this.startDate, cashFlowAnalysisRequest.startDate) &&
        Objects.equals(this.endDate, cashFlowAnalysisRequest.endDate) &&
        Objects.equals(this.clientId, cashFlowAnalysisRequest.clientId) &&
        Objects.equals(this.currencyCode, cashFlowAnalysisRequest.currencyCode) &&
        Objects.equals(this.showIncomeDetails, cashFlowAnalysisRequest.showIncomeDetails) &&
        Objects.equals(this.benchmarkEndDate, cashFlowAnalysisRequest.benchmarkEndDate) &&
        Objects.equals(this.showSpendingDetails, cashFlowAnalysisRequest.showSpendingDetails) &&
        Objects.equals(this.benchmarkStartDate, cashFlowAnalysisRequest.benchmarkStartDate);
  }

  @Override
  public int hashCode() {
    return Objects.hash(showHistory, startDate, endDate, clientId, currencyCode, showIncomeDetails, benchmarkEndDate, showSpendingDetails, benchmarkStartDate);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class CashFlowAnalysisRequest {\n");
    
    sb.append("    showHistory: ").append(toIndentedString(showHistory)).append("\n");
    sb.append("    startDate: ").append(toIndentedString(startDate)).append("\n");
    sb.append("    endDate: ").append(toIndentedString(endDate)).append("\n");
    sb.append("    clientId: ").append(toIndentedString(clientId)).append("\n");
    sb.append("    currencyCode: ").append(toIndentedString(currencyCode)).append("\n");
    sb.append("    showIncomeDetails: ").append(toIndentedString(showIncomeDetails)).append("\n");
    sb.append("    benchmarkEndDate: ").append(toIndentedString(benchmarkEndDate)).append("\n");
    sb.append("    showSpendingDetails: ").append(toIndentedString(showSpendingDetails)).append("\n");
    sb.append("    benchmarkStartDate: ").append(toIndentedString(benchmarkStartDate)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

