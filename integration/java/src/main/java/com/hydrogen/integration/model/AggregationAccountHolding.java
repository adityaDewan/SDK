/*
 * Hydrogen Integration API
 * The Hydrogen Integration API
 *
 * OpenAPI spec version: 1.2.1
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.integration.model;

import java.util.Objects;

import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;

import java.util.HashMap;
import java.util.Map;
import java.util.UUID;
import org.threeten.bp.OffsetDateTime;

/**
 * Aggregation Account Holding Object
 */
@ApiModel(description = "Aggregation Account Holding Object")
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-06-11T07:03:53.789Z")
public class AggregationAccountHolding {
  @SerializedName("aggregation_account_id")
  private UUID aggregationAccountId = null;

  @SerializedName("amount")
  private Double amount = null;

  @SerializedName("asset_class")
  private String assetClass = null;

  @SerializedName("cost_basis")
  private Double costBasis = null;

  @SerializedName("create_date")
  private OffsetDateTime createDate = null;

  @SerializedName("currency_code")
  private String currencyCode = null;

  @SerializedName("cusip")
  private String cusip = null;

  @SerializedName("exchange")
  private String exchange = null;

  @SerializedName("holding_date")
  private OffsetDateTime holdingDate = null;

  @SerializedName("holding_type")
  private String holdingType = null;

  @SerializedName("id")
  private UUID id = null;

  @SerializedName("is_active")
  private Boolean isActive = null;

  @SerializedName("isin")
  private String isin = null;

  @SerializedName("metadata")
  private Map<String, String> metadata = null;

  @SerializedName("price")
  private Double price = null;

  @SerializedName("secondary_id")
  private String secondaryId = null;

  @SerializedName("shares")
  private Double shares = null;

  @SerializedName("ticker")
  private String ticker = null;

  @SerializedName("ticker_name")
  private String tickerName = null;

  @SerializedName("update_date")
  private OffsetDateTime updateDate = null;

  public AggregationAccountHolding aggregationAccountId(UUID aggregationAccountId) {
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

  public AggregationAccountHolding amount(Double amount) {
    this.amount = amount;
    return this;
  }

   /**
   * Get amount
   * @return amount
  **/
  @ApiModelProperty(value = "")
  public Double getAmount() {
    return amount;
  }

  public void setAmount(Double amount) {
    this.amount = amount;
  }

  public AggregationAccountHolding assetClass(String assetClass) {
    this.assetClass = assetClass;
    return this;
  }

   /**
   * Get assetClass
   * @return assetClass
  **/
  @ApiModelProperty(value = "")
  public String getAssetClass() {
    return assetClass;
  }

  public void setAssetClass(String assetClass) {
    this.assetClass = assetClass;
  }

  public AggregationAccountHolding costBasis(Double costBasis) {
    this.costBasis = costBasis;
    return this;
  }

   /**
   * Get costBasis
   * @return costBasis
  **/
  @ApiModelProperty(value = "")
  public Double getCostBasis() {
    return costBasis;
  }

  public void setCostBasis(Double costBasis) {
    this.costBasis = costBasis;
  }

  public AggregationAccountHolding createDate(OffsetDateTime createDate) {
    this.createDate = createDate;
    return this;
  }

   /**
   * createDate
   * @return createDate
  **/
  @ApiModelProperty(example = "2017-01-05T00:00:00.000+0000", value = "createDate")
  public OffsetDateTime getCreateDate() {
    return createDate;
  }

  public void setCreateDate(OffsetDateTime createDate) {
    this.createDate = createDate;
  }

  public AggregationAccountHolding currencyCode(String currencyCode) {
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

  public AggregationAccountHolding cusip(String cusip) {
    this.cusip = cusip;
    return this;
  }

   /**
   * Get cusip
   * @return cusip
  **/
  @ApiModelProperty(value = "")
  public String getCusip() {
    return cusip;
  }

  public void setCusip(String cusip) {
    this.cusip = cusip;
  }

  public AggregationAccountHolding exchange(String exchange) {
    this.exchange = exchange;
    return this;
  }

   /**
   * Get exchange
   * @return exchange
  **/
  @ApiModelProperty(value = "")
  public String getExchange() {
    return exchange;
  }

  public void setExchange(String exchange) {
    this.exchange = exchange;
  }

  public AggregationAccountHolding holdingDate(OffsetDateTime holdingDate) {
    this.holdingDate = holdingDate;
    return this;
  }

   /**
   * holding_date
   * @return holdingDate
  **/
  @ApiModelProperty(example = "2018-06-28T18:17:23.579+0000", value = "holding_date")
  public OffsetDateTime getHoldingDate() {
    return holdingDate;
  }

  public void setHoldingDate(OffsetDateTime holdingDate) {
    this.holdingDate = holdingDate;
  }

  public AggregationAccountHolding holdingType(String holdingType) {
    this.holdingType = holdingType;
    return this;
  }

   /**
   * Get holdingType
   * @return holdingType
  **/
  @ApiModelProperty(value = "")
  public String getHoldingType() {
    return holdingType;
  }

  public void setHoldingType(String holdingType) {
    this.holdingType = holdingType;
  }

  public AggregationAccountHolding id(UUID id) {
    this.id = id;
    return this;
  }

   /**
   * id
   * @return id
  **/
  @ApiModelProperty(example = "1feae367-77be-4613-9cd0-f62fd5b3cff2", value = "id")
  public UUID getId() {
    return id;
  }

  public void setId(UUID id) {
    this.id = id;
  }

  public AggregationAccountHolding isActive(Boolean isActive) {
    this.isActive = isActive;
    return this;
  }

   /**
   * isActive
   * @return isActive
  **/
  @ApiModelProperty(example = "true", value = "isActive")
  public Boolean isIsActive() {
    return isActive;
  }

  public void setIsActive(Boolean isActive) {
    this.isActive = isActive;
  }

  public AggregationAccountHolding isin(String isin) {
    this.isin = isin;
    return this;
  }

   /**
   * isin
   * @return isin
  **/
  @ApiModelProperty(example = "xyz", value = "isin")
  public String getIsin() {
    return isin;
  }

  public void setIsin(String isin) {
    this.isin = isin;
  }

  public AggregationAccountHolding metadata(Map<String, String> metadata) {
    this.metadata = metadata;
    return this;
  }

  public AggregationAccountHolding putMetadataItem(String key, String metadataItem) {
    if (this.metadata == null) {
      this.metadata = new HashMap<String, String>();
    }
    this.metadata.put(key, metadataItem);
    return this;
  }

   /**
   * Get metadata
   * @return metadata
  **/
  @ApiModelProperty(example = "{}", value = "")
  public Map<String, String> getMetadata() {
    return metadata;
  }

  public void setMetadata(Map<String, String> metadata) {
    this.metadata = metadata;
  }

  public AggregationAccountHolding price(Double price) {
    this.price = price;
    return this;
  }

   /**
   * Get price
   * @return price
  **/
  @ApiModelProperty(value = "")
  public Double getPrice() {
    return price;
  }

  public void setPrice(Double price) {
    this.price = price;
  }

  public AggregationAccountHolding secondaryId(String secondaryId) {
    this.secondaryId = secondaryId;
    return this;
  }

   /**
   * Get secondaryId
   * @return secondaryId
  **/
  @ApiModelProperty(example = "7289243787238", value = "")
  public String getSecondaryId() {
    return secondaryId;
  }

  public void setSecondaryId(String secondaryId) {
    this.secondaryId = secondaryId;
  }

  public AggregationAccountHolding shares(Double shares) {
    this.shares = shares;
    return this;
  }

   /**
   * shares
   * @return shares
  **/
  @ApiModelProperty(required = true, value = "shares")
  public Double getShares() {
    return shares;
  }

  public void setShares(Double shares) {
    this.shares = shares;
  }

  public AggregationAccountHolding ticker(String ticker) {
    this.ticker = ticker;
    return this;
  }

   /**
   * ticker
   * @return ticker
  **/
  @ApiModelProperty(required = true, value = "ticker")
  public String getTicker() {
    return ticker;
  }

  public void setTicker(String ticker) {
    this.ticker = ticker;
  }

  public AggregationAccountHolding tickerName(String tickerName) {
    this.tickerName = tickerName;
    return this;
  }

   /**
   * tickerName
   * @return tickerName
  **/
  @ApiModelProperty(required = true, value = "tickerName")
  public String getTickerName() {
    return tickerName;
  }

  public void setTickerName(String tickerName) {
    this.tickerName = tickerName;
  }

  public AggregationAccountHolding updateDate(OffsetDateTime updateDate) {
    this.updateDate = updateDate;
    return this;
  }

   /**
   * updateDate
   * @return updateDate
  **/
  @ApiModelProperty(example = "2017-01-05T00:00:00.000+0000", value = "updateDate")
  public OffsetDateTime getUpdateDate() {
    return updateDate;
  }

  public void setUpdateDate(OffsetDateTime updateDate) {
    this.updateDate = updateDate;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    AggregationAccountHolding aggregationAccountHolding = (AggregationAccountHolding) o;
    return Objects.equals(this.aggregationAccountId, aggregationAccountHolding.aggregationAccountId) &&
        Objects.equals(this.amount, aggregationAccountHolding.amount) &&
        Objects.equals(this.assetClass, aggregationAccountHolding.assetClass) &&
        Objects.equals(this.costBasis, aggregationAccountHolding.costBasis) &&
        Objects.equals(this.createDate, aggregationAccountHolding.createDate) &&
        Objects.equals(this.currencyCode, aggregationAccountHolding.currencyCode) &&
        Objects.equals(this.cusip, aggregationAccountHolding.cusip) &&
        Objects.equals(this.exchange, aggregationAccountHolding.exchange) &&
        Objects.equals(this.holdingDate, aggregationAccountHolding.holdingDate) &&
        Objects.equals(this.holdingType, aggregationAccountHolding.holdingType) &&
        Objects.equals(this.id, aggregationAccountHolding.id) &&
        Objects.equals(this.isActive, aggregationAccountHolding.isActive) &&
        Objects.equals(this.isin, aggregationAccountHolding.isin) &&
        Objects.equals(this.metadata, aggregationAccountHolding.metadata) &&
        Objects.equals(this.price, aggregationAccountHolding.price) &&
        Objects.equals(this.secondaryId, aggregationAccountHolding.secondaryId) &&
        Objects.equals(this.shares, aggregationAccountHolding.shares) &&
        Objects.equals(this.ticker, aggregationAccountHolding.ticker) &&
        Objects.equals(this.tickerName, aggregationAccountHolding.tickerName) &&
        Objects.equals(this.updateDate, aggregationAccountHolding.updateDate);
  }

  @Override
  public int hashCode() {
    return Objects.hash(aggregationAccountId, amount, assetClass, costBasis, createDate, currencyCode, cusip, exchange, holdingDate, holdingType, id, isActive, isin, metadata, price, secondaryId, shares, ticker, tickerName, updateDate);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class AggregationAccountHolding {\n");
    
    sb.append("    aggregationAccountId: ").append(toIndentedString(aggregationAccountId)).append("\n");
    sb.append("    amount: ").append(toIndentedString(amount)).append("\n");
    sb.append("    assetClass: ").append(toIndentedString(assetClass)).append("\n");
    sb.append("    costBasis: ").append(toIndentedString(costBasis)).append("\n");
    sb.append("    createDate: ").append(toIndentedString(createDate)).append("\n");
    sb.append("    currencyCode: ").append(toIndentedString(currencyCode)).append("\n");
    sb.append("    cusip: ").append(toIndentedString(cusip)).append("\n");
    sb.append("    exchange: ").append(toIndentedString(exchange)).append("\n");
    sb.append("    holdingDate: ").append(toIndentedString(holdingDate)).append("\n");
    sb.append("    holdingType: ").append(toIndentedString(holdingType)).append("\n");
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    isActive: ").append(toIndentedString(isActive)).append("\n");
    sb.append("    isin: ").append(toIndentedString(isin)).append("\n");
    sb.append("    metadata: ").append(toIndentedString(metadata)).append("\n");
    sb.append("    price: ").append(toIndentedString(price)).append("\n");
    sb.append("    secondaryId: ").append(toIndentedString(secondaryId)).append("\n");
    sb.append("    shares: ").append(toIndentedString(shares)).append("\n");
    sb.append("    ticker: ").append(toIndentedString(ticker)).append("\n");
    sb.append("    tickerName: ").append(toIndentedString(tickerName)).append("\n");
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

