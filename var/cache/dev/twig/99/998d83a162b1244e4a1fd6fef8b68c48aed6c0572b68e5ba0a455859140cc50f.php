<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ac20f75799f38bd1c77e468d91d91e25a29aa28fdb058d64c64f6311bdd9e21b extends Twig_Template
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
        $__internal_4d7f98e8991b8f709f786c490033d4b141be57a4f6678306550d7678e24acc50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7f98e8991b8f709f786c490033d4b141be57a4f6678306550d7678e24acc50->enter($__internal_4d7f98e8991b8f709f786c490033d4b141be57a4f6678306550d7678e24acc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_402524d8d9e73e24bda2de06df9307cb24425aa6f68c950d327ff98bc2b5bb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402524d8d9e73e24bda2de06df9307cb24425aa6f68c950d327ff98bc2b5bb73->enter($__internal_402524d8d9e73e24bda2de06df9307cb24425aa6f68c950d327ff98bc2b5bb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4d7f98e8991b8f709f786c490033d4b141be57a4f6678306550d7678e24acc50->leave($__internal_4d7f98e8991b8f709f786c490033d4b141be57a4f6678306550d7678e24acc50_prof);

        
        $__internal_402524d8d9e73e24bda2de06df9307cb24425aa6f68c950d327ff98bc2b5bb73->leave($__internal_402524d8d9e73e24bda2de06df9307cb24425aa6f68c950d327ff98bc2b5bb73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
