<?php

/* compte/show.html.twig */
class __TwigTemplate_47b801e130408ed7a94f43004d0f2afe2ac04a24b79cd4fa2580229698abf772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c00cceb2f5b15e9a915cc3b4476f91c99f82c7b9b5d2784ebcab1a5fcbda5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c00cceb2f5b15e9a915cc3b4476f91c99f82c7b9b5d2784ebcab1a5fcbda5fd->enter($__internal_3c00cceb2f5b15e9a915cc3b4476f91c99f82c7b9b5d2784ebcab1a5fcbda5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/show.html.twig"));

        $__internal_9281e1e003e939ec433c201599c9f539f3caad066a4f494d68d46c4d50604e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9281e1e003e939ec433c201599c9f539f3caad066a4f494d68d46c4d50604e48->enter($__internal_9281e1e003e939ec433c201599c9f539f3caad066a4f494d68d46c4d50604e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/show.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "

";
        
        $__internal_3c00cceb2f5b15e9a915cc3b4476f91c99f82c7b9b5d2784ebcab1a5fcbda5fd->leave($__internal_3c00cceb2f5b15e9a915cc3b4476f91c99f82c7b9b5d2784ebcab1a5fcbda5fd_prof);

        
        $__internal_9281e1e003e939ec433c201599c9f539f3caad066a4f494d68d46c4d50604e48->leave($__internal_9281e1e003e939ec433c201599c9f539f3caad066a4f494d68d46c4d50604e48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_499426b20f400e015683b5dc4498407e5cde106bc06072afd8f392cde3f0ba7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499426b20f400e015683b5dc4498407e5cde106bc06072afd8f392cde3f0ba7e->enter($__internal_499426b20f400e015683b5dc4498407e5cde106bc06072afd8f392cde3f0ba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e5bb58579bc65f1875099628715b3d3ca43e777540972ca71961f24fd321b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5bb58579bc65f1875099628715b3d3ca43e777540972ca71961f24fd321b5d->enter($__internal_8e5bb58579bc65f1875099628715b3d3ca43e777540972ca71961f24fd321b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row-fluid centre\">
        <div class=\"span10\">
  <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>All Accounts</h5>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordere data-table\">
              <thead>
                <th>Nomprop</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "nomprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenomprop</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "prenomprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telprop</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "telprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresseprop</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "adresseprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mailprop</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "mailprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modelevoit</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "modelevoit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marquevoit</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "marquevoit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Immatvoit</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "immatvoit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cinprop</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "cinprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
            </table>
          </div>
    </div>

            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</div>
</div>
";
        
        $__internal_8e5bb58579bc65f1875099628715b3d3ca43e777540972ca71961f24fd321b5d->leave($__internal_8e5bb58579bc65f1875099628715b3d3ca43e777540972ca71961f24fd321b5d_prof);

        
        $__internal_499426b20f400e015683b5dc4498407e5cde106bc06072afd8f392cde3f0ba7e->leave($__internal_499426b20f400e015683b5dc4498407e5cde106bc06072afd8f392cde3f0ba7e_prof);

    }

    public function getTemplateName()
    {
        return "compte/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  138 => 57,  128 => 50,  121 => 46,  114 => 42,  107 => 38,  100 => 34,  93 => 30,  86 => 26,  79 => 22,  72 => 18,  65 => 14,  53 => 4,  44 => 3,  32 => 63,  30 => 3,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block body %}
<div class=\"row-fluid centre\">
        <div class=\"span10\">
  <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>All Accounts</h5>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordere data-table\">
              <thead>
                <th>Nomprop</th>
                <td>{{ compte.nomprop }}</td>
            </tr>
            <tr>
                <th>Prenomprop</th>
                <td>{{ compte.prenomprop }}</td>
            </tr>
            <tr>
                <th>Telprop</th>
                <td>{{ compte.telprop }}</td>
            </tr>
            <tr>
                <th>Adresseprop</th>
                <td>{{ compte.adresseprop }}</td>
            </tr>
            <tr>
                <th>Mailprop</th>
                <td>{{ compte.mailprop }}</td>
            </tr>
            <tr>
                <th>Modelevoit</th>
                <td>{{ compte.modelevoit }}</td>
            </tr>
            <tr>
                <th>Marquevoit</th>
                <td>{{ compte.marquevoit }}</td>
            </tr>
            <tr>
                <th>Immatvoit</th>
                <td>{{ compte.immatvoit }}</td>
            </tr>
            <tr>
                <th>Cinprop</th>
                <td>{{ compte.cinprop }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ compte.id }}</td>
            </tr>
        </tbody>
            </table>
          </div>
    </div>

            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
</div>
</div>
{% endblock %}


", "compte/show.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar\\app\\Resources\\views\\compte\\show.html.twig");
    }
}
