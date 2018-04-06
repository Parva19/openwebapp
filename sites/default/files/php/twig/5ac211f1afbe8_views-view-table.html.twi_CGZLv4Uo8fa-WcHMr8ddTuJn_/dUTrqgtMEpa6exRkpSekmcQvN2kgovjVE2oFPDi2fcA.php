<?php

/* themes/openwebapp1/templates/views-view-table.html.twig */
class __TwigTemplate_a94a9930120e18a5ac58c98d46542b9fb83a0a4f7be75ba4bdafa4bb52f6023d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 36, "set" => 40, "for" => 74);
        $filters = array("merge" => 112);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('merge'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 36
        if (($context["responsive"] ?? null)) {
            // line 37
            echo "  <div class=\"table-responsive\">
";
        }
        // line 40
        $context["classes"] = array(0 => "table", 1 => ((        // line 42
($context["bordered"] ?? null)) ? ("table-bordered") : ("")), 2 => ((        // line 43
($context["condensed"] ?? null)) ? ("table-condensed") : ("")), 3 => ((        // line 44
($context["hover"] ?? null)) ? ("table-hover") : ("")), 4 => ((        // line 45
($context["striped"] ?? null)) ? ("table-striped") : ("")), 5 => ((        // line 46
($context["sticky"] ?? null)) ? ("sticky-enabled") : ("")), 6 => "webappexample", 7 => "webcontent");
        // line 51
        echo "<table";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 52
        if (($context["caption_needed"] ?? null)) {
            // line 53
            echo "    <caption>
      ";
            // line 54
            if (($context["caption"] ?? null)) {
                // line 55
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true));
                echo "
      ";
            } else {
                // line 57
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
      ";
            }
            // line 59
            echo "      ";
            if (( !twig_test_empty(($context["summary"] ?? null)) ||  !twig_test_empty(($context["description"] ?? null)))) {
                // line 60
                echo "        <details>
          ";
                // line 61
                if ( !twig_test_empty(($context["summary"] ?? null))) {
                    // line 62
                    echo "            <summary>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["summary"] ?? null), "html", null, true));
                    echo "</summary>
          ";
                }
                // line 64
                echo "          ";
                if ( !twig_test_empty(($context["description"] ?? null))) {
                    // line 65
                    echo "            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
                    echo "
          ";
                }
                // line 67
                echo "        </details>
      ";
            }
            // line 69
            echo "    </caption>
  ";
        }
        // line 71
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 72
            echo "    <thead>
    <tr>
      ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 75
                echo "        ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 76
                    echo "          ";
                    // line 77
                    $context["column_classes"] = array(0 => "views-field", 1 => ("views-field-" . $this->getAttribute(                    // line 79
($context["fields"] ?? null), $context["key"], array(), "array")), 2 => "webappcontent");
                    // line 83
                    echo "        ";
                }
                // line 84
                echo "      <th";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["column_classes"] ?? null)), "method"), "setAttribute", array(0 => "scope", 1 => "col"), "method"), "html", null, true));
                echo ">";
                // line 85
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 86
                    echo "<";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                    // line 87
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 88
                        echo "<a href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 90
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                    // line 92
                    echo "</";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 94
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 95
                        echo "<a href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 97
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                }
                // line 100
                echo "</th>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "    </tr>
    </thead>
  ";
        }
        // line 105
        echo "  <tbody>
  ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 107
            echo "    <tr";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", array()));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 109
                echo "        ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 110
                    echo "          ";
                    $context["column_classes"] = array(0 => "views-field");
                    // line 111
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "fields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 112
                        echo "            ";
                        $context["column_classes"] = twig_array_merge(($context["column_classes"] ?? null), array(0 => ("views-field-" . $context["field"])));
                        // line 113
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    echo "        ";
                }
                // line 115
                echo "      <td";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["column_classes"] ?? null)), "method"), "html", null, true));
                echo ">";
                // line 116
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 117
                    echo "<";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">
          ";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 119
                        echo "            ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                        echo "
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "          </";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 124
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 127
                echo "        </td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "  </tbody>
</table>
";
        // line 133
        if (($context["responsive"] ?? null)) {
            // line 134
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/openwebapp1/templates/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 134,  292 => 133,  288 => 131,  281 => 129,  274 => 127,  266 => 124,  262 => 123,  257 => 121,  247 => 119,  243 => 118,  238 => 117,  236 => 116,  232 => 115,  229 => 114,  223 => 113,  220 => 112,  215 => 111,  212 => 110,  209 => 109,  205 => 108,  200 => 107,  196 => 106,  193 => 105,  188 => 102,  181 => 100,  176 => 97,  166 => 95,  164 => 94,  159 => 92,  155 => 90,  145 => 88,  143 => 87,  139 => 86,  137 => 85,  133 => 84,  130 => 83,  128 => 79,  127 => 77,  125 => 76,  122 => 75,  118 => 74,  114 => 72,  111 => 71,  107 => 69,  103 => 67,  97 => 65,  94 => 64,  88 => 62,  86 => 61,  83 => 60,  80 => 59,  74 => 57,  68 => 55,  66 => 54,  63 => 53,  61 => 52,  56 => 51,  54 => 46,  53 => 45,  52 => 44,  51 => 43,  50 => 42,  49 => 40,  45 => 37,  43 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation for displaying a view as a table.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 *   - class: HTML classes that can be used to style contextually through CSS.
 * - title : The title of this group of rows.
 * - header: The table header columns.
 *   - attributes: Remaining HTML attributes for the element.
 *   - content: HTML classes to apply to each header cell, indexed by
 *   the header's key.
 * - caption_needed: Is the caption tag needed.
 * - caption: The caption for this table.
 * - accessibility_description: Extended description for the table details.
 * - accessibility_summary: Summary for the table details.
 * - responsive: Whether or not to use the .table-responsive wrapper.
 * - rows: Table row items. Rows are keyed by row number.
 *   - attributes: HTML classes to apply to each row.
 *   - columns: Row column items. Columns are keyed by column number.
 *     - attributes: HTML classes to apply to each column.
 *     - content: The column content.
 * - bordered: Flag indicating whether or not the table should be bordered.
 * - condensed: Flag indicating whether or not the table should be condensed.
 * - hover: Flag indicating whether or not table rows should be hoverable.
 * - striped: Flag indicating whether or not table rows should be striped.
 * - responsive: Flag indicating whether or not the table should be wrapped to
 *   be responsive (using the Bootstrap Framework .table-responsive wrapper).
 *
 * @ingroup templates
 *
 * @see template_preprocess_views_view_table()
 */
#}
{% if responsive %}
  <div class=\"table-responsive\">
{% endif %}
{%
  set classes = [
    'table',
    bordered ? 'table-bordered',
    condensed ? 'table-condensed',
    hover ? 'table-hover',
    striped ? 'table-striped',
    sticky ? 'sticky-enabled',
    'webappexample',
    'webcontent'
  ]
%}
<table{{ attributes.addClass(classes) }}>
  {% if caption_needed %}
    <caption>
      {% if caption %}
        {{ caption }}
      {% else %}
        {{ title }}
      {% endif %}
      {% if (summary is not empty) or (description is not empty) %}
        <details>
          {% if summary is not empty %}
            <summary>{{ summary }}</summary>
          {% endif %}
          {% if description is not empty %}
            {{ description }}
          {% endif %}
        </details>
      {% endif %}
    </caption>
  {% endif %}
  {% if header %}
    <thead>
    <tr>
      {% for key, column in header %}
        {% if column.default_classes %}
          {%
          set column_classes = [
          'views-field',
          'views-field-' ~ fields[key],
          'webappcontent'
          ]
          %}
        {% endif %}
      <th{{ column.attributes.addClass(column_classes).setAttribute('scope', 'col') }}>
        {%- if column.wrapper_element -%}
          <{{ column.wrapper_element }}>
          {%- if column.url -%}
            <a href=\"{{ column.url }}\" title=\"{{ column.title }}\">{{ column.content }}{{ column.sort_indicator }}</a>
          {%- else -%}
            {{ column.content }}{{ column.sort_indicator }}
          {%- endif -%}
          </{{ column.wrapper_element }}>
        {%- else -%}
          {%- if column.url -%}
            <a href=\"{{ column.url }}\" title=\"{{ column.title }}\">{{ column.content }}{{ column.sort_indicator }}</a>
          {%- else -%}
            {{- column.content }}{{ column.sort_indicator }}
          {%- endif -%}
        {%- endif -%}
        </th>
      {% endfor %}
    </tr>
    </thead>
  {% endif %}
  <tbody>
  {% for row in rows %}
    <tr{{ row.attributes }}>
      {% for key, column in row.columns %}
        {% if column.default_classes %}
          {% set column_classes = [ 'views-field' ] %}
          {% for field in column.fields %}
            {% set column_classes = column_classes|merge(['views-field-' ~ field]) %}
          {% endfor %}
        {% endif %}
      <td{{ column.attributes.addClass(column_classes) }}>
        {%- if column.wrapper_element -%}
          <{{ column.wrapper_element }}>
          {% for content in column.content %}
            {{ content.separator }}{{ content.field_output }}
          {% endfor %}
          </{{ column.wrapper_element }}>
        {%- else -%}
          {% for content in column.content %}
            {{- content.separator }}{{ content.field_output -}}
          {% endfor %}
        {%- endif %}
        </td>
      {% endfor %}
    </tr>
  {% endfor %}
  </tbody>
</table>
{% if responsive %}
  </div>
{% endif %}
", "themes/openwebapp1/templates/views-view-table.html.twig", "/var/www/html/drupal-8/themes/openwebapp1/templates/views-view-table.html.twig");
    }
}
