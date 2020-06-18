/*
 * Hydrogen Atom API
 * The Hydrogen Atom API
 *
 * OpenAPI spec version: 1.7.0
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.nucleus.model;

import java.util.Objects;

import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;

import java.util.Map;
import java.util.UUID;
import org.threeten.bp.OffsetDateTime;

/**
 * Aggregation Account Transaction Object
 */
@ApiModel(description = "Aggregation Account Transaction Object")
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-06-04T05:11:20.520Z")
public class AggregationAccountTransaction {
  @SerializedName("aggregation_account_id")
  private UUID aggregationAccountId = null;

  @SerializedName("bank_credit")
  private BankCredit bankCredit = null;

  @SerializedName("cash")
  private Cash cash = null;

  @SerializedName("create_date")
  private OffsetDateTime createDate = null;

  @SerializedName("currency_code")
  private String currencyCode = null;

  @SerializedName("id")
  private UUID id = null;

  @SerializedName("investment")
  private Investment investment = null;

  @SerializedName("is_excluded_analysis")
  private Boolean isExcludedAnalysis = null;

  @SerializedName("is_recurring")
  private Boolean isRecurring = null;

  @SerializedName("metadata")
  private Map<String, String> metadata = null;

  @SerializedName("secondary_id")
  private String secondaryId = null;

  @SerializedName("status")
  private String status = null;

  @SerializedName("transaction_date")
  private OffsetDateTime transactionDate = null;

  @SerializedName("update_date")
  private OffsetDateTime updateDate = null;

  public AggregationAccountTransaction aggregationAccountId(UUID aggregationAccountId) {
    this.aggregationAccountId = aggregationAccountId;
    return this;
  }

   /**
   * aggregationAccountId
   * @return aggregationAccountId
  **/
  @ApiModelProperty(example = "2feae367-77be-4613-9cd0-f62fd5b3cff9", value = "aggregationAccountId")
  public UUID getAggregationAccountId() {
    return aggregationAccountId;
  }

  public void setAggregationAccountId(UUID aggregationAccountId) {
    this.aggregationAccountId = aggregationAccountId;
  }

  public AggregationAccountTransaction bankCredit(BankCredit bankCredit) {
    this.bankCredit = bankCredit;
    return this;
  }

   /**
   * Get bankCredit
   * @return bankCredit
  **/
  @ApiModelProperty(value = "")
  public BankCredit getBankCredit() {
    return bankCredit;
  }

  public void setBankCredit(BankCredit bankCredit) {
    this.bankCredit = bankCredit;
  }

  public AggregationAccountTransaction cash(Cash cash) {
    this.cash = cash;
    return this;
  }

   /**
   * Get cash
   * @return cash
  **/
  @ApiModelProperty(value = "")
  public Cash getCash() {
    return cash;
  }

  public void setCash(Cash cash) {
    this.cash = cash;
  }

   /**
   * Get createDate
   * @return createDate
  **/
  @ApiModelProperty(example = "2018-06-28T18:17:23.579+0000", value = "")
  public OffsetDateTime getCreateDate() {
    return createDate;
  }

  public AggregationAccountTransaction currencyCode(String currencyCode) {
    this.currencyCode = currencyCode;
    return this;
  }

   /**
   * currencyCode
   * @return currencyCode
  **/
  @ApiModelProperty(example = "USD", required = true, value = "currencyCode")
  public String getCurrencyCode() {
    return currencyCode;
  }

  public void setCurrencyCode(String currencyCode) {
    this.currencyCode = currencyCode;
  }

   /**
   * Get id
   * @return id
  **/
  @ApiModelProperty(example = "000183ac-2288-4564-a76b-119f4694be98", value = "")
  public UUID getId() {
    return id;
  }

  public AggregationAccountTransaction investment(Investment investment) {
    this.investment = investment;
    return this;
  }

   /**
   * Get investment
   * @return investment
  **/
  @ApiModelProperty(value = "")
  public Investment getInvestment() {
    return investment;
  }

  public void setInvestment(Investment investment) {
    this.investment = investment;
  }

  public AggregationAccountTransaction isExcludedAnalysis(Boolean isExcludedAnalysis) {
    this.isExcludedAnalysis = isExcludedAnalysis;
    return this;
  }

   /**
   * Get isExcludedAnalysis
   * @return isExcludedAnalysis
  **/
  @ApiModelProperty(value = "")
  public Boolean isIsExcludedAnalysis() {
    return isExcludedAnalysis;
  }

  public void setIsExcludedAnalysis(Boolean isExcludedAnalysis) {
    this.isExcludedAnalysis = isExcludedAnalysis;
  }

  public AggregationAccountTransaction isRecurring(Boolean isRecurring) {
    this.isRecurring = isRecurring;
    return this;
  }

   /**
   * Get isRecurring
   * @return isRecurring
  **/
  @ApiModelProperty(value = "")
  public Boolean isIsRecurring() {
    return isRecurring;
  }

  public void setIsRecurring(Boolean isRecurring) {
    this.isRecurring = isRecurring;
  }

   /**
   * Get metadata
   * @return metadata
  **/
  @ApiModelProperty(example = "{}", value = "")
  public Map<String, String> getMetadata() {
    return metadata;
  }

   /**
   * Get secondaryId
   * @return secondaryId
  **/
  @ApiModelProperty(example = "7289243787238", value = "")
  public String getSecondaryId() {
    return secondaryId;
  }

  public AggregationAccountTransaction status(String status) {
    this.status = status;
    return this;
  }

   /**
   * status
   * @return status
  **/
  @ApiModelProperty(example = "active", value = "status")
  public String getStatus() {
    return status;
  }

  public void setStatus(String status) {
    this.status = status;
  }

  public AggregationAccountTransaction transactionDate(OffsetDateTime transactionDate) {
    this.transactionDate = transactionDate;
    return this;
  }

   /**
   * transactionDate
   * @return transactionDate
  **/
  @ApiModelProperty(example = "2018-06-28T18:17:23.579+0000", required = true, value = "transactionDate")
  public OffsetDateTime getTransactionDate() {
    return transactionDate;
  }

  public void setTransactionDate(OffsetDateTime transactionDate) {
    this.transactionDate = transactionDate;
  }

   /**
   * Get updateDate
   * @return updateDate
  **/
  @ApiModelProperty(example = "2018-06-28T18:17:23.579+0000", value = "")
  public OffsetDateTime getUpdateDate() {
    return updateDate;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    AggregationAccountTransaction aggregationAccountTransaction = (AggregationAccountTransaction) o;
    return Objects.equals(this.aggregationAccountId, aggregationAccountTransaction.aggregationAccountId) &&
        Objects.equals(this.bankCredit, aggregationAccountTransaction.bankCredit) &&
        Objects.equals(this.cash, aggregationAccountTransaction.cash) &&
        Objects.equals(this.createDate, aggregationAccountTransaction.createDate) &&
        Objects.equals(this.currencyCode, aggregationAccountTransaction.currencyCode) &&
        Objects.equals(this.id, aggregationAccountTransaction.id) &&
        Objects.equals(this.investment, aggregationAccountTransaction.investment) &&
        Objects.equals(this.isExcludedAnalysis, aggregationAccountTransaction.isExcludedAnalysis) &&
        Objects.equals(this.isRecurring, aggregationAccountTransaction.isRecurring) &&
        Objects.equals(this.metadata, aggregationAccountTransaction.metadata) &&
        Objects.equals(this.secondaryId, aggregationAccountTransaction.secondaryId) &&
        Objects.equals(this.status, aggregationAccountTransaction.status) &&
        Objects.equals(this.transactionDate, aggregationAccountTransaction.transactionDate) &&
        Objects.equals(this.updateDate, aggregationAccountTransaction.updateDate);
  }

  @Override
  public int hashCode() {
    return Objects.hash(aggregationAccountId, bankCredit, cash, createDate, currencyCode, id, investment, isExcludedAnalysis, isRecurring, metadata, secondaryId, status, transactionDate, updateDate);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class AggregationAccountTransaction {\n");
    
    sb.append("    aggregationAccountId: ").append(toIndentedString(aggregationAccountId)).append("\n");
    sb.append("    bankCredit: ").append(toIndentedString(bankCredit)).append("\n");
    sb.append("    cash: ").append(toIndentedString(cash)).append("\n");
    sb.append("    createDate: ").append(toIndentedString(createDate)).append("\n");
    sb.append("    currencyCode: ").append(toIndentedString(currencyCode)).append("\n");
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    investment: ").append(toIndentedString(investment)).append("\n");
    sb.append("    isExcludedAnalysis: ").append(toIndentedString(isExcludedAnalysis)).append("\n");
    sb.append("    isRecurring: ").append(toIndentedString(isRecurring)).append("\n");
    sb.append("    metadata: ").append(toIndentedString(metadata)).append("\n");
    sb.append("    secondaryId: ").append(toIndentedString(secondaryId)).append("\n");
    sb.append("    status: ").append(toIndentedString(status)).append("\n");
    sb.append("    transactionDate: ").append(toIndentedString(transactionDate)).append("\n");
    sb.append("    updateDate: ").append(toIndentedString(updateDate)).append("\n");
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

