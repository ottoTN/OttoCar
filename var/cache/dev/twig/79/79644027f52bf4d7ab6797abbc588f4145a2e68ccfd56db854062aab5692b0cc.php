<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_8469a0a2bf65aac82a283552646cb4b814010920224cde5a67bfb82b2ea362ed extends Twig_Template
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
        $__internal_6abada4179a605050977c99a20e7acc05fadfa87362ca2a7e3e7ddcaa1461623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abada4179a605050977c99a20e7acc05fadfa87362ca2a7e3e7ddcaa1461623->enter($__internal_6abada4179a605050977c99a20e7acc05fadfa87362ca2a7e3e7ddcaa1461623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_af896855b3b5dffeeffebacb6274233c56511c192edcb6e6acb11dc5de4b236f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af896855b3b5dffeeffebacb6274233c56511c192edcb6e6acb11dc5de4b236f->enter($__internal_af896855b3b5dffeeffebacb6274233c56511c192edcb6e6acb11dc5de4b236f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6abada4179a605050977c99a20e7acc05fadfa87362ca2a7e3e7ddcaa1461623->leave($__internal_6abada4179a605050977c99a20e7acc05fadfa87362ca2a7e3e7ddcaa1461623_prof);

        
        $__internal_af896855b3b5dffeeffebacb6274233c56511c192edcb6e6acb11dc5de4b236f->leave($__internal_af896855b3b5dffeeffebacb6274233c56511c192edcb6e6acb11dc5de4b236f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
